<?php
 
namespace MST\Dream\Controller\Index;
 
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
 
class Mai extends \Magento\Framework\App\Action\Action
{
    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
		JsonFactory $resultJsonFactory
    )
    {
        parent::__construct($context);
		$this->resultJsonFactory = $resultJsonFactory;
    }
    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
		$conentKaka = $this->_view->getLayout()->createBlock('MST\Dream\Block\NewsList')->setTemplate('MST_Dream::ajax.phtml')->toHtml();
		$response = array('maiuoc'=> $conentKaka);
		return $resultJson->setData($response);
    }
}
 