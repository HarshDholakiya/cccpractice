<?php
class Admin_Block_Customer extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('admin/customer/order.phtml');
    }
    public function displayOrder(){
       return Mage::getModel('sales/order')->getCollection()->getData();
    }
    public function getStatusMethod()
    {
        return [
            'pending' => 'pending',
            'shipped' => 'shipped',
            'cancel' => 'cancel',
            'decline' => 'decline',
            'refunded' => 'refunded'
        ];
    }
}
