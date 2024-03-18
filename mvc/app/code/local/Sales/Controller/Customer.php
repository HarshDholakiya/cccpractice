<?php
class Sales_Controller_Customer extends Core_Controller_Front_Action{
    public function viewlistAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('footer.css');
        $child = $layout->getChild('content');
        $customerform = $layout->createBlock('sales/customer');
        $child->addChild('form',$customerform);
        echo $layout->toHtml();
    }
}