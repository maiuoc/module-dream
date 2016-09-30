<?php
    /**
     * Dream overide  Product Product view Block
     *
     * @category    MST
     * @package     MST_Dream
     * @author      Dream
     *
     */
    namespace MST\Dream\Block\Rewrite\Product;
 
    class View extends \Magento\Catalog\Block\Product\View
    {
       function getProduct()
	   {
		   //echo " I have been overidding Block Ne Ke ke";
		   return parent::getProduct();
	   }
    }