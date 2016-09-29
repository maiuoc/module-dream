<?php
 
namespace MST\Dream\Controller\Adminhtml\News;
 
use MST\Dream\Controller\Adminhtml\News;
 
class NewAction extends News
{
   /**
     * Create new news action
     *
     * @return void
     */
   public function execute()
   {
      $this->_forward('edit');
   }
	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed('MST_Dream::add_news');
	}
}
 