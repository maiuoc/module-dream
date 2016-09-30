<?php
 
namespace MST\Dream\Controller\Adminhtml\News;
 
use MST\Dream\Controller\Adminhtml\News;
 
class Edit extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      $newsId = $this->getRequest()->getParam('id');
        /** @var \Tutorial\SimpleNews\Model\News $model */
        $model = $this->_newsFactory->create();
 
        if ($newsId) {
            $model->load($newsId);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This news no longer exists.'));
                $this->_redirect('*/*/');
                return;
            }
        }
 
        // Restore previously entered form data from session
        $data = $this->_session->getNewsData(true);
        if (!empty($data)) {
            $model->setData($data);
        }
        $this->_coreRegistry->register('dream_news', $model);
 
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('MST_Dream::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));
 
        return $resultPage;
   }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MST_Dream::add_news');
    }
}
 