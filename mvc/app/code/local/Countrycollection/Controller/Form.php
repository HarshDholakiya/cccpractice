<?php
class Countrycollection_Controller_Form extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('footer.css');
        $child = $layout->getChild('content');
        $Form = $layout->createBlock('countrycollection/form');
        $child->addChild('form', $Form);
        echo $layout->toHtml();
    }
    public function addAction(){
        $id = $this->getRequest()->getParams('id');
        // print_r($data)
     $this->setRedirect('countrycollection/form/form?id='.$id);
    }


}