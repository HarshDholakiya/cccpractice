<?php 
class Admin_Controller_Status extends Core_Controller_Admin_Action{
    public function listAction(){
        $layout= $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('footer.css');
        $child = $layout->getChild('content');
        $statusForm = $layout->createBlock('admin/status');
        $child->addChild('status',$statusForm);
        $layout->toHtml();
    }
}