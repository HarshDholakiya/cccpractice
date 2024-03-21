<?php
class Admin_Block_Customer extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/customer/order.phtml');
    }
    public function displayOrder()
    {
        return Mage::getModel('sales/order')->getCollection()->getData();
    }
    public function getStatusMethod()
    {
        return [
            'pending' => 'pending',
            'Processing' => 'Processing',
            'On Hold' => 'On Hold',
            'Completed' => 'Completed',
            'Canceled' => 'Canceled',
            'Refunded' => 'Refunded',
            'Shipped' => 'Shipped',
            'Delivered' => 'Delivered',
            'Returned' => 'Returned'
        ];
    }
    public function getCancelRequest()
    {
        $data = Mage::getModel('sales/order_history')->getCollection()
            ->addFieldToFilter('to_status', 'cancel')
            ->addFieldToFilter('action_by', 1)
            ->getData();

        //   print_r($orderId);
        return $data;

    }
    public function getRejectStatus(){
       $data = Mage::getModel('sales/order_history')->getCollection()->getData();
       $toStatus=[];
        foreach($data as $value){
            $toStatus[] = $value->getToStatus();  
        }
        return $toStatus;
    }
}
