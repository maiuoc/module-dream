<?php
 
namespace MST\Dream\Controller\Adminhtml;
 
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use MST\Dream\Model\NewsFactory;
use MST\Dream\Helper\Data;
use MST\Dream\Model\Image as ImageModel;
use MST\Dream\Model\Upload as UploadImages;
class News extends Action
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;
	/**
     * Dream Data Helper
     *
     * @var MST\Dream\Helper\Data;
     */
	protected $_dataHelper;
	/**
     * Image model
     *
     * @var  MST\Dream\Model\Image;
     */
	protected $_imageModel;
	/**
     * Image images
     *
     * @var  MST\Dream\Model\Upload;
     */
	protected $_uploadImages;
    /**
     * Result page factory
     *
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;
 
    /**
     * News model factory
     *
     * @var \Tutorial\SimpleNews\Model\NewsFactory
     */
    protected $_newsFactory;
 
    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param PageFactory $resultPageFactory
     * @param NewsFactory $newsFactory
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        NewsFactory $newsFactory,
		Data $dataHelper,
		ImageModel $ImageModel,
		UploadImages $uploadImages
    ) {
       parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_newsFactory = $newsFactory;
		$this->_dataHelper = $dataHelper;
		$this->_imageModel = $ImageModel;
		$this->_uploadImages = $uploadImages;
    }
	public function execute()
	{
	   
	}
 
    /**
     * News access rights checking
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MST_Dream::manage_news');
    }
}