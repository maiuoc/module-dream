<?php
 
namespace MST\Dream\Helper;
 
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;
use Magento\Backend\Helper\Data as BackendHelper;
class Data extends AbstractHelper
{
   const XML_PATH_ENABLED      = 'dream/general/enable_in_frontend';
   const XML_PATH_HEAD_TITLE   = 'dream/general/head_title';
   const XML_PATH_LASTEST_NEWS = 'dream/general/lastest_news_block_position';
 
   /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;
	protected $_backendHelper;
    /**
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
       Context $context,
       ScopeConfigInterface $scopeConfig,
	   BackendHelper $backendHelper
    ) 
	{
       parent::__construct($context);
       $this->_scopeConfig = $scopeConfig;
       $this->_backendHelper = $backendHelper;
    }
 
   /**
     * Check for module is enabled in frontend
     *
     * @return bool
     */
   public function isEnabledInFrontend($store = null)
   {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_ENABLED,
         ScopeInterface::SCOPE_STORE
      );
   }
 
   /**
     * Get head title for news list page
     *
     * @return string
     */
   public function getHeadTitle()
   {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_HEAD_TITLE,
         ScopeInterface::SCOPE_STORE
      );
   }
 
   /**
     * Get lastest news block position (Left, Right, Disabled)
     *
     * @return int
     */
   public function getLastestNewsBlockPosition()
   {
      return $this->_scopeConfig->getValue(
         self::XML_PATH_LASTEST_NEWS,
         ScopeInterface::SCOPE_STORE
      );
   }
   function getBookingAdminUrl($router,$param = [])
   {
	   
	   return $this->_backendHelper->getUrl($router,$param);
   }
}
 