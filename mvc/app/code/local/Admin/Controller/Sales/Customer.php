<?php
class Admin_Controller_Sales_Customer extends Core_Controller_Admin_Action{
    public function listAction(){
       $layout =  $this->getLayout();
       $layout->getChild('head')->addcss('header.css');
         $layout->getChild('head')->addcss('admin/customerorderlist.css');
       $layout->getChild('head')->addcss('footer.css');
       $child = $layout->getChild('content');
       $viewForm = $layout->createBlock('admin/customer');
       $child->addChild('form', $viewForm);
       echo $layout->toHtml();
    }
    public function saveAction(){
      //  echo 123;
       
      $status = $this->getRequest()->getParams('order');
    
      $data = Mage::getModel('sales/order')->setData($status);
      $data->save();
      $this->setRedirect('admin/sales_customer/list');
      // $order = Mage::getModel('sales/order');
      //  $orderArray=$this->getRequest()->getPostData('order');
      //  $data=$order->getCollection()->addFieldToFilter('order_id',$orderArray['order_id'])->getFirstItem();
      //  $data->addData('status',$orderArray['status'])->save();
    }
}