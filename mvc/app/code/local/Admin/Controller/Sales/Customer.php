<?php
class Admin_Controller_Sales_Customer extends Core_Controller_Admin_Action{
    public function listAction(){
       $layout =  $this->getLayout();
       $layout->getChild('head')->addcss('header.css');
    //    $layout->getChild('head')->addcss('category/form.css');
       $layout->getChild('head')->addcss('footer.css');
       $child = $layout->getChild('content');
       $viewForm = $layout->createBlock('admin/customer');
       $child->addChild('form', $viewForm);
       echo $layout->toHtml();
    }
}