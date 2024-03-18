<?php
class Cart_Controller_Index extends Core_Controller_Front_Action{
   public function formAction(){
    $layout = $this->getLayout();
    $layout->getChild('head')->addcss('header.css');
    $layout->getChild('head')->addcss('cart/product/form.css');
    $layout->getChild('head')->addcss('footer.css');
// $layout->getChild('head')->addJs('abc.js');
      $child = $layout->getChild('content');

     $cartForm = $layout->createBlock('cart/form');
     $child->addChild('form', $cartForm);
     echo $layout->toHtml();
   }
   public function listAction(){
    
   }
   

}