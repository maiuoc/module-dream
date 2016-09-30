<?php
 
namespace MST\Dream\Controller\Index;
 
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Checkout\Model\Cart as CustomerCart;
class Testcart extends \Magento\Framework\App\Action\Action
{
    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
	protected $_cart;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
		CustomerCart $cart
    )
    {
        parent::__construct($context);
		$this->_cart = $cart;
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
       $carts = $this->_cart;
	   $items = $carts->getQuote()->getAllItems();
	   foreach($items as $item)
	   {
		   echo $item->getId();
		   $_customOptions = $item->getProduct()->getTypeInstance(true)->getOrderOptions($item->getProduct());
		    echo "<pre>";
			print_r($_customOptions);
	   }
	   echo "Mai uoc xcvzxv";
	 //  echo "<pre>";
	  //print_r($items);
	  // Zend_deubg::dump($carts);
    }
}
 