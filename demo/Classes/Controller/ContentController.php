    <?php
namespace F6\Demo\Controller;

/***
 *
 * This file is part of the "content man" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 ss <s@gmail.com>, F6
 *
 ***/

/**
 * ContentController
 */
class ContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * contentRepository
     *
     * @var \F6\Demo\Domain\Repository\ContentRepository
     * @inject
     */
    protected $contentRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $contents = $this->contentRepository->findAll();
        $this->view->assign('contents', $contents);
    }

    /**
     * action show
     *
     * @param \F6\Demo\Domain\Model\Content $content
     * @return void
     */
    public function showAction(\F6\Demo\Domain\Model\Content $content)
    {
        $this->view->assign('content', $content);
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
     * @param \F6\Demo\Domain\Model\Content $newContent
     * @return void
     */
    public function createAction(\F6\Demo\Domain\Model\Content $newContent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->contentRepository->add($newContent);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \F6\Demo\Domain\Model\Content $content
     * @ignorevalidation $content
     * @return void
     */
    public function editAction(\F6\Demo\Domain\Model\Content $content)
    {
        $this->view->assign('content', $content);
    }

    /**
     * action update
     *
     * @param \F6\Demo\Domain\Model\Content $content
     * @return void
     */
    public function updateAction(\F6\Demo\Domain\Model\Content $content)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->contentRepository->update($content);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \F6\Demo\Domain\Model\Content $content
     * @return void
     */
    public function deleteAction(\F6\Demo\Domain\Model\Content $content)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->contentRepository->remove($content);
        $this->redirect('list');
    }
    function getrecord(){
        
    }
}
