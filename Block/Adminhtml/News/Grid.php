<?php
 
namespace MST\Dream\Block\Adminhtml\News;
 
use Magento\Backend\Block\Widget\Grid as WidgetGrid;
 
class Grid extends WidgetGrid
{
	protected function _prepareCollection()
	{
		/* $collection = $this->getCollection();
		$tableCait = 'dream_simplenews_category';
		$collection->getSelect()->joinLeft(array('table_cat'=>$tableCait),'main_table.caid_id = table_cat.cait_id',array('cat_title'));
		return parent::_prepareCollection(); */
	}

}