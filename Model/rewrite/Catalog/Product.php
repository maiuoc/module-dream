<?php
    /**
     *MST Dream Product Rewrite Model
     *
     * @category    MST
     * @package     MST_Dream
     * 
     *
     */
    namespace MST\Dream\Model\Rewrite\Catalog;
 
    class Product extends \Magento\Catalog\Model\Product
    {
        public function isSalable()
        {
            // Do your stuff here
			//echo " I'm at model ka ka";
            return parent::isSalable();
        }
 
    }