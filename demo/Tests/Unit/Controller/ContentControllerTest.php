<?php
namespace F6\Demo\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author ss <s@gmail.com>
 */
class ContentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Demo\Controller\ContentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\F6\Demo\Controller\ContentController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllContentsFromRepositoryAndAssignsThemToView()
    {

        $allContents = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $contentRepository = $this->getMockBuilder(\F6\Demo\Domain\Repository\ContentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $contentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allContents));
        $this->inject($this->subject, 'contentRepository', $contentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('contents', $allContents);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenContentToView()
    {
        $content = new \F6\Demo\Domain\Model\Content();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('content', $content);

        $this->subject->showAction($content);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenContentToContentRepository()
    {
        $content = new \F6\Demo\Domain\Model\Content();

        $contentRepository = $this->getMockBuilder(\F6\Demo\Domain\Repository\ContentRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $contentRepository->expects(self::once())->method('add')->with($content);
        $this->inject($this->subject, 'contentRepository', $contentRepository);

        $this->subject->createAction($content);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenContentToView()
    {
        $content = new \F6\Demo\Domain\Model\Content();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('content', $content);

        $this->subject->editAction($content);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenContentInContentRepository()
    {
        $content = new \F6\Demo\Domain\Model\Content();

        $contentRepository = $this->getMockBuilder(\F6\Demo\Domain\Repository\ContentRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $contentRepository->expects(self::once())->method('update')->with($content);
        $this->inject($this->subject, 'contentRepository', $contentRepository);

        $this->subject->updateAction($content);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenContentFromContentRepository()
    {
        $content = new \F6\Demo\Domain\Model\Content();

        $contentRepository = $this->getMockBuilder(\F6\Demo\Domain\Repository\ContentRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $contentRepository->expects(self::once())->method('remove')->with($content);
        $this->inject($this->subject, 'contentRepository', $contentRepository);

        $this->subject->deleteAction($content);
    }
}
