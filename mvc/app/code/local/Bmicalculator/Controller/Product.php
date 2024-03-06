<?php
class Bmicalculator_Controller_Product extends Core_Controller_Front_Action{
    public function formAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('footer.css');
       $child =  $layout->getChild('content');
        $form = Mage::getBlock('Bmicalculator/product');
       $child->addChild('product',$form);
       $layout->toHtml();
   
    }
    public function saveAction(){
      
        // echo "<pre>";
    
        // $customerId = 1;
      
        // // echo $count;
       
           
        // $customerId=  Mage::getSingleton('core/session')
        //         ->set('logged_in_customer_id',$customerId);
          
        //         $customerId->get('logged_in_customer_id');
            
        //         if($customerId)
        //         {
        //             print_r($customerId);
        //             echo "<pre>";
        //            $obj= Mage::getModel('bmicalculator/customer')->getCollection()->addFieldToFilter('session_id',$customerId)->getData();
        //            print_r($obj);
        //         }
        $data = $this->getRequest()->getParams('bmi');
       
        $product = Mage::getModel('bmicalculator/product')
            ->setData($data);
         
        //   echo 123;  
        $product->save();


        print_r($product);
    }
    
}