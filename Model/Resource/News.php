<?php
 
namespace MST\Dream\Model\Resource;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class News extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('dream_simplenews', 'id');
    }
}