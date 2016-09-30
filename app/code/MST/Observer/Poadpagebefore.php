<?php
namespace MST\Dream\Observer;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;
class Poadpagebefore implements ObserverInterface
{
	/* 
	* test event load page before
	*/
    public function execute(EventObserver $observer)
    {
		echo "hello Ong noi Uoc";
    }
}
