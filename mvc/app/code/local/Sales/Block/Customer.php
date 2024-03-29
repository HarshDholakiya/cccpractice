<?php
class Sales_Block_Customer extends Core_Block_Template
{
  public function __construct()
  {
    $this->setTemplate('sales/customer/list.phtml');
  }
  public function getPurchaseList()
  {
    // $id= Mage::getModel('sales/order_item')->getCollection()->getId();

    return Mage::getModel('sales/order_item')->getCollection()->getData();
  }
  public function getQuoteList()
  {
    // $id= Mage::getModel('sales/order_item')->getCollection()->getId();

    return Mage::getModel('sales/quote_item')->getCollection()->addFieldToFilter('quote_id', Mage::getSingleton('core/session')->get('quote_id'))->getData();
  }
  public function showCustomerOrder()
  {
    $customer_id = Mage::getSingleton('core/session')->get('logged_in_customer_id');
    $final = Mage::getModel('sales/order_customer')->getCollection()
      ->addFieldToFilter('customer_id', $customer_id)->getData();
      // print_r($final);
    $order = [];
    foreach ($final as $orderItem) {
      $order_id = $orderItem->getOrderId();
      // print_r($orderItem->getOrderId());
      $order[] = Mage::getModel('sales/order_item')->getCollection()->addFieldToFilter('order_id', $order_id)->getData();
      // print_r($order);
      
    }
    // print_r($order);
    return $order;
  }
  public function showCancelButton()
  {
    $data = Mage::getModel('sales/order_history')->getCollection()->getData();
    // print_r($data);
    foreach ($data as $value) {
      $orderId = $value->getOrderId();
      $tostatus = $value->getToStatus();
      $actionby = $value->getActionBy();
    }
    echo "<pre>";
    $arr = Mage::getModel('sales/order_history')->getCollection()
      ->addFieldToFilter('to_status', $tostatus)
      ->addFieldToFilter('action_by', 1)
      ->getData();
    // print_r($arr);
    // foreach($arr as $hd){
    //   $pr = $hd->getOrderId();
    // }
    return $arr;
  }
  public function getOrderStatus()
  {
    $OrderData = Mage::getModel('sales/order')->getCollection()->addFieldToFilter('status', 'Completed')->getData();

    $statusArr = [];
    foreach ($OrderData as $obj) {
      $statusArr[] = $obj->getOrderId();
    }
    return $statusArr;
  }



}