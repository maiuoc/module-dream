<?php
namespace MST\Dream\Block\Adminhtml\Grid\Renderer;
use \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use MST\Dream\Model\Image as ImageModel;
class Customcolumn extends AbstractRenderer
{
	protected $_imageModel;
	/**
     * Image images
     *
     * @var  MST\Dream\Model\Upload;
     */
	 public function __construct(
		ImageModel $ImageModel
    ) {
       //parent::__construct();
		$this->_imageModel = $ImageModel;
    }
   public function render(\Magento\Framework\DataObject $row)
   {
		$baseUrl = $this->_imageModel->getBaseUrl();
		$data = $this->_getValue($row);
		$strImage = '<img width="100" height="100" src="'.$baseUrl.'/'.$data.'" />';
		return $strImage;
   }
}