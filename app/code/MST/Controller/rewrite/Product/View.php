<?php
  /**
     *MST Dream Product Rewrite Controller
     *
     * @category    MST
     * @package     MST_Dream
     * 
     *
     */
    namespace MST\Dream\Controller\Rewrite\Product;
 
    class View extends \Magento\Catalog\Controller\Product\View
    {
        /**
         * @return \Magento\Framework\Controller\Result\Redirect|\Magento\Framework\View\Result\Page
         */
        public function execute()
        {
            // Do your stuff here
			//echo "Tui dang O controller ne";
            return parent::execute();
        }
    }