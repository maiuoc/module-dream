<?php
 
namespace MST\Dream\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class News extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('MST\Dream\Model\Resource\News');
    }
	function sayHi()
	{
		echo 'Ong Noi Uoc';
	}
}