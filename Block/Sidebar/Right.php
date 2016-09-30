<?php
 
namespace MST\Dream\Block\Sidebar;
 
use MST\Dream\Block\Sidebar;
use MST\Dream\Model\System\Config\LastestNews\Position;
 
class Right extends Sidebar
{
   public function _construct()
   {
      $position = $this->_dataHelper->getLastestNewsBlockPosition();
      // Check this position is applied or not
      if ($position == Position::RIGHT) {
         $this->setTemplate('MST_Dream::sidebar.phtml');
      }
   }
}