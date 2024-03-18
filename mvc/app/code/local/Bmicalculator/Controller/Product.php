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
      
        
        $data = $this->getRequest()->getParams('bmi');
        $weightstatus =$this->getRequest()->getParams('weightstatus');
        $heightstatus =$this->getRequest()->getParams('heightstatus');
       
        $product = Mage::getModel('bmicalculator/product')
            ->addProduct($data, $weightstatus, $heightstatus);
         
        //   echo 123;  
     
    }
 
    
}