<?php
 
namespace MST\Dream\Controller\Adminhtml\News;
 
use MST\Dream\Controller\Adminhtml\News;
 
class Maiuoc extends News
{
    /**
     * @return void
     */
   public function execute()
   {
      if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }
        
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('MST_Dream::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Dream Dash Ka ka'));
        return $resultPage;
   }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MST_Dream::manage_custom_girid');
    }
}