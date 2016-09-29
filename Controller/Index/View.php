<?php
 
namespace MST\Dream\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use MST\Dream\Model\NewsFactory;
 
class View extends Action
{
	protected $_resultPageFactory;
	protected $_modelNewsFactory;
	 public function __construct(
        Context $context,
		PageFactory $resultPageFactory,
		NewsFactory $modelNewsFactory
    ) {
        parent::__construct($context);
		$this->_resultPageFactory = $resultPageFactory;
		$this->_modelNewsFactory = $modelNewsFactory;
    }
    public function execute()
    {
	// Get news ID
        $newsId = $this->getRequest()->getParam('id');
	// Get news data
        $news = $this->_modelNewsFactory->create()->load($newsId);
	// Save news data into the registry
        $this->_objectManager->get('Magento\Framework\Registry')
            ->register('newsData', $news);
 
        $pageFactory = $this->_resultPageFactory->create();
 
        // Add title
        $pageFactory->getConfig()->getTitle()->set($news->getTitle());
 
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
                'label' => $news->getTitle(),
                'title' => $news->getTitle()
            ]
        );
 
        return $pageFactory;
    }
}
 