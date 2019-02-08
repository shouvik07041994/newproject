<?php
namespace F6\Fxspeaker\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author shouvik <s@gmail.com>
 */
class SpeakerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\Fxspeaker\Controller\SpeakerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\F6\Fxspeaker\Controller\SpeakerController::class)
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
    public function listActionFetchesAllSpeakersFromRepositoryAndAssignsThemToView()
    {

        $allSpeakers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $speakerRepository = $this->getMockBuilder(\F6\Fxspeaker\Domain\Repository\SpeakerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $speakerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSpeakers));
        $this->inject($this->subject, 'speakerRepository', $speakerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('speakers', $allSpeakers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSpeakerToView()
    {
        $speaker = new \F6\Fxspeaker\Domain\Model\Speaker();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('speaker', $speaker);

        $this->subject->showAction($speaker);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSpeakerToSpeakerRepository()
    {
        $speaker = new \F6\Fxspeaker\Domain\Model\Speaker();

        $speakerRepository = $this->getMockBuilder(\F6\Fxspeaker\Domain\Repository\SpeakerRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $speakerRepository->expects(self::once())->method('add')->with($speaker);
        $this->inject($this->subject, 'speakerRepository', $speakerRepository);

        $this->subject->createAction($speaker);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSpeakerToView()
    {
        $speaker = new \F6\Fxspeaker\Domain\Model\Speaker();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('speaker', $speaker);

        $this->subject->editAction($speaker);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSpeakerInSpeakerRepository()
    {
        $speaker = new \F6\Fxspeaker\Domain\Model\Speaker();

        $speakerRepository = $this->getMockBuilder(\F6\Fxspeaker\Domain\Repository\SpeakerRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $speakerRepository->expects(self::once())->method('update')->with($speaker);
        $this->inject($this->subject, 'speakerRepository', $speakerRepository);

        $this->subject->updateAction($speaker);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSpeakerFromSpeakerRepository()
    {
        $speaker = new \F6\Fxspeaker\Domain\Model\Speaker();

        $speakerRepository = $this->getMockBuilder(\F6\Fxspeaker\Domain\Repository\SpeakerRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $speakerRepository->expects(self::once())->method('remove')->with($speaker);
        $this->inject($this->subject, 'speakerRepository', $speakerRepository);

        $this->subject->deleteAction($speaker);
    }
}
