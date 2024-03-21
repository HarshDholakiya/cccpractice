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
    public function showCancelButton(){
        $data= Mage::getModel('sales/order_history')->getCollection()->getData();
        // print_r($data);
        foreach($data as $value){
          $orderId = $value->getOrderId();
         $tostatus = $value->getToStatus();
         $actionby = $value->getActionBy();
        }
        echo "<pre>";
       $arr =  Mage::getModel('sales/order_history')->getCollection()
                                            ->addFieldToFilter('to_status',$tostatus)
                                            ->addFieldToFilter('action_by',1)
                                            ->getData();
                                            // print_r($arr);
          // foreach($arr as $hd){
          //   $pr = $hd->getOrderId();
          // }
          return $arr;
    }
    public function getOrderStatus(){
     $OrderData = Mage::getModel('sales/order')->getCollection()->addFieldToFilter('status','Completed')->getData();
    
     $statusArr=[];
      foreach($OrderData as $obj){
        $statusArr[] = $obj->getOrderId();
      }
      return $statusArr;
    }
}