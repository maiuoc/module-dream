<?php
 
namespace MST\Dream\Model\Resource\News;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'MST\Dream\Model\News',
            'MST\Dream\Model\Resource\News'
        );
    }
}