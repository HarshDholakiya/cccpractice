<?php
class Admin_Controller_Sales_Customer extends Core_Controller_Admin_Action
{
  public function listAction()
  {
    $layout = $this->getLayout();
    $layout->getChild('head')->addcss('header.css');
    $layout->getChild('head')->addcss('admin/customerorderlist.css');
    $layout->getChild('head')->addcss('footer.css');
    $child = $layout->getChild('content');
    $viewForm = $layout->createBlock('admin/customer');
    $child->addChild('form', $viewForm);
    echo $layout->toHtml();

  }
  public function saveAction()
  {
    //  echo 123;
    $statusarry = $this->getRequest()->getParams('order');
    $order = Mage::getModel('sales/order')->getCollection()
      ->addFieldToFilter('order_id', $statusarry['order_id'])
      ->getFirstItem()
      ->getStatus();
    //  print_r($order);
    // print_r($statusarry);


    $data = Mage::getModel('sales/order')->setData($statusarry);
    // print_r($data);
    $data->save();
    // $this->setRedirect('admin/sales_customer/list');

    // $order = Mage::getModel('sales/order');
    //  $orderArray=$this->getRequest()->getPostData('order');
    //  $data=$order->getCollection()->addFieldToFilter('order_id',$orderArray['order_id'])->getFirstItem();
    //  $data->addData('status',$orderArray['status'])->save();


    Mage::getModel('sales/order_history')->setData(
      [
        'from_status' => $order,
        'to_status' => $statusarry['status'],
        'order_id' => $statusarry['order_id'],
        'action_by' => 0
      ]
    )->save();
  }
  public function approveAction()
  {
    $orderStatus = $this->getRequest()->getParams('approve');
    $order = Mage::getModel('sales/order')->load($orderStatus['order_id'])->getStatus();
    $history = Mage::getModel('sales/order_history')->setData(
      [

        'order_id' => $orderStatus['order_id'],
        'from_status' => $order,
        'to_status' => 'cancel',
        'action_by' => 0
      ]
    )->save();

    echo "<pre>";
    $tostatus = Mage::getModel('sales/order_history')->getCollection();
    foreach ($tostatus->getData() as $status) {
      $id = $status->getHistoryId();
    }
    $tostatus = Mage::getModel('sales/order_history')->getCollection()
      ->addFieldToFilter('order_id', $orderStatus['order_id'])
      ->addFieldToFilter('history_id', $id)
      ->addOrderBy('history_id', 'DESC')
      ->getFirstItem()
      ->getToStatus();
    //  print_r($ok);
    //  die;
    Mage::getModel('sales/order')->setData(
      [
        'order_id' => $orderStatus['order_id'],
        'status' => $tostatus
      ]
    )->save();
  }
  public function rejectAction()
  {
    $orderStatus = $this->getRequest()->getParams('reject');
    Mage::getModel('sales/order_history')->setData(
      [
        'order_id' => $orderStatus['order_id'],
        'from_status' => 'cancel',
        'to_status' => 'cancellation declined',
        'action_by' => 0

      ]
    )->save();
  }
}