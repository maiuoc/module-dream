<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MST\Dream\Model\Rewrite\Quote\Item;
/**
 * Class ToOrderItem
 */
class ToOrderItem extends \Magento\Quote\Model\Quote\Item\ToOrderItem
{
   
    public function convert($item, $data = [])
    {
        $options = $item->getProductOrderOptions();
        if (!$options) {
            $options = $item->getProduct()->getTypeInstance()->getOrderOptions($item->getProduct());
        }
        $orderItemData = $this->objectCopyService->getDataFromFieldset(
            'quote_convert_item',
            'to_order_item',
            $item
        );
        if (!$item->getNoDiscount()) {
            $data = array_merge(
                $data,
                $this->objectCopyService->getDataFromFieldset(
                    'quote_convert_item',
                    'to_order_item_discount',
                    $item
                )
            );
        }
        $orderItem = $this->orderItemFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $orderItem,
            array_merge($orderItemData, $data),
            '\Magento\Sales\Api\Data\OrderItemInterface'
        );
		$options['additional_options'][] = array('label' => 'Time chec in', 'value'=> 'Mai Uoc ka ka');
        $orderItem->setProductOptions($options);
        if ($item->getParentItem()) {
            $orderItem->setQtyOrdered(
                $orderItemData[OrderItemInterface::QTY_ORDERED] * $item->getParentItem()->getQty()
            );
        }
        return $orderItem;
    }
}
