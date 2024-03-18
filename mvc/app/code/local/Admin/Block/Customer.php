<?php
class Admin_Block_Customer extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('admin/customer/order.phtml');
    }
}