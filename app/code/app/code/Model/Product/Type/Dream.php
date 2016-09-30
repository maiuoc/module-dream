<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MST\Dream\Model\Product\Type;

/**
 * Dream product type implementation
 */
class Dream extends \Magento\Catalog\Model\Product\Type\AbstractType
{
	 /**
     * Product type code
     */
	const TYPE_CODE = 'dream';
    /**
     * Delete data specific for Simple product type
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return void
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
    }
}
