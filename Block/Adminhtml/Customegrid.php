<?php
 
namespace MST\Dream\Block\Adminhtml;
 
use Magento\Backend\Block\Widget\Grid\Container;
use MST\Dream\Helper\Data as DreamData;
class Customegrid extends Container
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
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'MST_Dream';
        $this->_headerText = __('Custom Gripd Kaka');
        $this->removeButton('add');
       // $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}