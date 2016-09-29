<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MST\Dream\Block\Adminhtml\Product\Edit;

class Tab extends \Magento\Backend\Block\Widget\Tab
{
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
	protected $_template = 'MST_Dream::catalog/product/tab/mytab.phtml';
	protected $coreRegistry;
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
		\Magento\Framework\Registry $coreRegistry,
        array $data = []
    ) {
        parent::__construct($context, $data);
		 $this->setCanShow(true);
		$this->coreRegistry = $coreRegistry;
		
       /*  if (!$this->_request->getParam('id') || !$this->_authorization->isAllowed('Magento_Review::reviews_all')) {
            $this->setCanShow(false);
        } */
    }
	public function getProduct()
    {
        return $this->coreRegistry->registry('product');
    }
}
