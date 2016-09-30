<?php
 
namespace MST\Dream\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
 
class Testjs extends Action
{
	protected $_resultPageFactory;
	 public function __construct(
        Context $context,
		PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
		$this->_resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
	// Get news ID
        $newsId = $this->getRequest()->getParam('id');
	// Get news data

        $pageFactory = $this->_resultPageFactory->create();
 
        // Add title
        $pageFactory->getConfig()->getTitle()->set('Test ');
 
        // Add breadcrumb
        /** @var \Magento\Theme\Block\Html\Breadcrumbs */
        $breadcrumbs = $pageFactory->getLayout()->getBlock('breadcrumbs');
        $breadcrumbs->addCrumb('home',
            [
                'label' => __('Home'),
                'title' => __('Home'),
                'link' => $this->_url->getUrl('')
            ]
        );
        $breadcrumbs->addCrumb('dream',
            [
                'label' => __('Simple News'),
                'title' => __('Simple News'),
                'link' => $this->_url->getUrl('dream/index/maiuoc')
            ]
        );
        $breadcrumbs->addCrumb('news',
            [
                'label' => __('Simple News'),
                'title' => __('Simple News')
            ]
        );
 
        return $pageFactory;
    }
}
 