<?php
 
namespace MST\Dream\Block;
 
use Magento\Framework\View\Element\Template;
use MST\Dream\Helper\Data;
use MST\Dream\Model\NewsFactory;
use MST\Dream\Model\System\Config\Status;
 
class Sidebar extends Template
{
   /**
    * @var \Tutorial\SimpleNews\Helper\Data
    */
   protected $_dataHelper;
 
   /**
    * @var \Tutorial\SimpleNews\Model\NewsFactory
    */
   protected $_newsFactory;
 
   /**
    * @param Template\Context $context
    * @param Data $dataHelper
    * @param NewsFactory $newsFactory
    */
   public function __construct(
      Template\Context $context,
      Data $dataHelper,
      NewsFactory $newsFactory
   ) {
      $this->_dataHelper = $dataHelper;
      $this->_newsFactory = $newsFactory;
      parent::__construct($context);
   }
 
   /**
    * Get five latest news
    *
    * @return \Tutorial\SimpleNews\Model\Resource\News\Collection
    */
   public function getLatestNews()
   {
      // Get news collection
      $collection = $this->_newsFactory->create()->getCollection();
      $collection->addFieldToFilter(
         'status',
         ['eq' => Status::ENABLED]
      );
      $collection->getSelect()
         ->order('id DESC')
         ->limit(5);
 
      return $collection;
   }
}
 