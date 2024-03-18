<?php
class Sales_Block_Customer extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('sales/customer/list.phtml');
    }
    public function getPurchaseList(){
        // $id= Mage::getModel('sales/order_item')->getCollection()->getId();
     
      return  Mage::getModel('sales/order_item')->getCollection()->getData();
    }
    public function getQuoteList(){
        // $id= Mage::getModel('sales/order_item')->getCollection()->getId();
     
      return  Mage::getModel('sales/quote_item')->getCollection()->addFieldToFilter('quote_id', Mage::getSingleton('core/session')->get('quote_id'))->getData();
    }
}