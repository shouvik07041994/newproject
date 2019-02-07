<?php
namespace F6\FxEmp\Controller;

/***
 *
 * This file is part of the "Employee Record" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 shovik <shovik@gmail.com>, F6
 *
 ***/

/**
 * EployeeeController
 */
class EployeeeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * eployeeeRepository
     *
     * @var \F6\FxEmp\Domain\Repository\EployeeeRepository
     * @inject
     */
    protected $eployeeeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        echo 'i am in list';
        $eployeees = $this->eployeeeRepository->findAll();
        $this->view->assign('eployeees', $eployeees);
    }

    /**
     * action show
     *
     * @param \F6\FxEmp\Domain\Model\Eployeee $eployeee
     * @return void
     */
    public function showAction(\F6\FxEmp\Domain\Model\Eployeee $eployeee)
    {
        $this->view->assign('eployeee', $eployeee);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \F6\FxEmp\Domain\Model\Eployeee $newEployeee
     * @return void
     */
    public function createAction(\F6\FxEmp\Domain\Model\Eployeee $newEployeee)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eployeeeRepository->add($newEployeee);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \F6\FxEmp\Domain\Model\Eployeee $eployeee
     * @ignorevalidation $eployeee
     * @return void
     */
    public function editAction(\F6\FxEmp\Domain\Model\Eployeee $eployeee)
    {
        $this->view->assign('eployeee', $eployeee);
    }

    /**
     * action update
     *
     * @param \F6\FxEmp\Domain\Model\Eployeee $eployeee
     * @return void
     */
    public function updateAction(\F6\FxEmp\Domain\Model\Eployeee $eployeee)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eployeeeRepository->update($eployeee);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \F6\FxEmp\Domain\Model\Eployeee $eployeee
     * @return void
     */
    public function deleteAction(\F6\FxEmp\Domain\Model\Eployeee $eployeee)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->eployeeeRepository->remove($eployeee);
        $this->redirect('list');
    }
}
