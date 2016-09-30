<?php
 
namespace MST\Dream\Controller\Adminhtml\News;
 
use MST\Dream\Controller\Adminhtml\News;
 
class Grid extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      return $this->_resultPageFactory->create();
   }
}
 