<?php
 
namespace MST\Dream\Model\System\Config;
 
use Magento\Framework\Option\ArrayInterface;
class Categories implements ArrayInterface
{
    
    /**
     * @return array
     */
    public function toOptionArray()
    {
		//get data from category
		$options = array(
			1 => 'Mai van uoc',
			2 => 'Test Ong Noi'
		);
        return $options;
    }
}