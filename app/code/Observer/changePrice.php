<?php
namespace MST\Dream\Observer;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;
class ChangePrice implements ObserverInterface
{
    public function execute(EventObserver $observer)
    {
		$item = $observer->getEvent()->getData('quote_item');
        $product = $observer->getEvent()->getData('product');
        $item = ($item->getParentItem() ? $item->getParentItem() : $item );
        // Load the custom price
        $price = $product->getPrice()+10; // 10 is custom price. It will increase in product price.
        // Set the custom price
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        // Enable super mode on the product.
        $item->getProduct()->setIsSuperMode(true);
        return $this;
    }
}
