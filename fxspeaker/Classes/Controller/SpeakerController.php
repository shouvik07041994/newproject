<?php
namespace F6\Fxspeaker\Controller;

/***
 *
 * This file is part of the "speaker" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 shouvik <s@gmail.com>, f6
 *
 ***/

/**
 * SpeakerController
 */
class SpeakerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * speakerRepository
     *
     * @var \F6\Fxspeaker\Domain\Repository\SpeakerRepository
     * @inject
     */
    protected $speakerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $speakers = $this->speakerRepository->findAll();
        $this->view->assign('speakers', $speakers);
    }

    /**
     * action show
     *
     * @param \F6\Fxspeaker\Domain\Model\Speaker $speaker
     * @return void
     */
    public function showAction(\F6\Fxspeaker\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
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
     * @param \F6\Fxspeaker\Domain\Model\Speaker $newSpeaker
     * @return void
     */
    public function createAction(\F6\Fxspeaker\Domain\Model\Speaker $newSpeaker)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->add($newSpeaker);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \F6\Fxspeaker\Domain\Model\Speaker $speaker
     * @ignorevalidation $speaker
     * @return void
     */
    public function editAction(\F6\Fxspeaker\Domain\Model\Speaker $speaker)
    {
        $this->view->assign('speaker', $speaker);
    }

    /**
     * action update
     *
     * @param \F6\Fxspeaker\Domain\Model\Speaker $speaker
     * @return void
     */
    public function updateAction(\F6\Fxspeaker\Domain\Model\Speaker $speaker)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->update($speaker);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \F6\Fxspeaker\Domain\Model\Speaker $speaker
     * @return void
     */
    public function deleteAction(\F6\Fxspeaker\Domain\Model\Speaker $speaker)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->speakerRepository->remove($speaker);
        $this->redirect('list');
    }
}
