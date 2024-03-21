<?php
class Sales_Controller_Customer extends Core_Controller_Front_Action{
    public function viewlistAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('customer/customerorder/list.css');
        $layout->getChild('head')->addCss('footer.css');
        $child = $layout->getChild('content');
        $customerform = $layout->createBlock('sales/customer');
        $child->addChild('form',$customerform);
        echo $layout->toHtml();
    }
    public function cancelAction(){
        $dataArray = $this->getRequest()->getParams('cancel');
        // print_r($dataArray['cancel']);
        //  die;
        $status=Mage::getModel('sales/order')->getCollection()->addFieldToFilter('order_id',$dataArray['order_id'])
                                            ->getFirstItem()
                                            ->getStatus();
            
        Mage::getModel('sales/order_history')->setData(
            [
                'order_id'=>$dataArray['order_id'],
                'from_status'=>$status,
                'to_status' => $dataArray['cancel'],
                'action_by'=>1
            ]
            )->save();
    }
}