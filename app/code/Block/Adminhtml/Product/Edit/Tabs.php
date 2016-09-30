<?php 

namespace MST\Dream\Block\Adminhtml\Product\Edit;

class Tabs extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tabs
{
	protected function _prepareLayout()
    {
		parent::_prepareLayout();
		$this->addTab(
			'tab_dream',
			[
				'label' => __('Dream Tabs'),
				'content' => $this->_translateHtml(
					$this->getLayout()->createBlock(
						'MST\Dream\Block\Adminhtml\Product\Edit\tab'
					)->toHtml()
				),
				'group_code' => self::BASIC_TAB_GROUP_CODE
			]
		);
	}
}