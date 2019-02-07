<?php
namespace F6\FxEmp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author shovik <shovik@gmail.com>
 */
class EployeeeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \F6\FxEmp\Controller\EployeeeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\F6\FxEmp\Controller\EployeeeController::class)
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
    public function listActionFetchesAllEployeeesFromRepositoryAndAssignsThemToView()
    {

        $allEployeees = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $eployeeeRepository = $this->getMockBuilder(\F6\FxEmp\Domain\Repository\EployeeeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $eployeeeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEployeees));
        $this->inject($this->subject, 'eployeeeRepository', $eployeeeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('eployeees', $allEployeees);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEployeeeToView()
    {
        $eployeee = new \F6\FxEmp\Domain\Model\Eployeee();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('eployeee', $eployeee);

        $this->subject->showAction($eployeee);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenEployeeeToEployeeeRepository()
    {
        $eployeee = new \F6\FxEmp\Domain\Model\Eployeee();

        $eployeeeRepository = $this->getMockBuilder(\F6\FxEmp\Domain\Repository\EployeeeRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $eployeeeRepository->expects(self::once())->method('add')->with($eployeee);
        $this->inject($this->subject, 'eployeeeRepository', $eployeeeRepository);

        $this->subject->createAction($eployeee);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenEployeeeToView()
    {
        $eployeee = new \F6\FxEmp\Domain\Model\Eployeee();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('eployeee', $eployeee);

        $this->subject->editAction($eployeee);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenEployeeeInEployeeeRepository()
    {
        $eployeee = new \F6\FxEmp\Domain\Model\Eployeee();

        $eployeeeRepository = $this->getMockBuilder(\F6\FxEmp\Domain\Repository\EployeeeRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $eployeeeRepository->expects(self::once())->method('update')->with($eployeee);
        $this->inject($this->subject, 'eployeeeRepository', $eployeeeRepository);

        $this->subject->updateAction($eployeee);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenEployeeeFromEployeeeRepository()
    {
        $eployeee = new \F6\FxEmp\Domain\Model\Eployeee();

        $eployeeeRepository = $this->getMockBuilder(\F6\FxEmp\Domain\Repository\EployeeeRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $eployeeeRepository->expects(self::once())->method('remove')->with($eployeee);
        $this->inject($this->subject, 'eployeeeRepository', $eployeeeRepository);

        $this->subject->deleteAction($eployeee);
    }
}
