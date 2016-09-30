<?php
 
namespace MST\Dream\Block\Adminhtml;
 
use Magento\Backend\Block\Widget\Grid\Container;
use MST\Dream\Helper\Data as DreamData;
class News extends Container
{
	protected $_dataHelper;
	function __construct(
		\Magento\Backend\Block\Widget\Context $context,
		array $data = [],
		DreamData $dataHelper
	)
	{
		$this->_dataHelper = $dataHelper;
		parent::__construct($context, $data);
		
	}
   /**
     * Constructor
     *
     * @return void
     */
   protected function _construct()
    {
		$dreamHelper = $this->_dataHelper;
		//$testUrl = $dreamHelper->getBookingAdminUrl('dream/news/maiuoc',array('booking_id'=>1));
		//echo $testUrl;
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'MST_Dream';
        $this->_headerText = __('Manage News');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}