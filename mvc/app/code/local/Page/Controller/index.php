<?php

class Page_Controller_Index extends Core_Controller_Front_Action 
{
    public function indexAction()
    {
        // echo "<pre>";
        $layout = $this->getLayout();
        $layout->getChild("head");
         $layout->getChild("head")->addjs('js/abc.js');
        $layout->getChild("head")->addjs('js/bbb.js');
       
        $layout->getChild("head")->addcss('css/abc.css');
        $layout->getChild("head")->addcss('css/bbb.css');
        // print_r($layout->getChild("head"));
        $layout->toHtml();
        
        // print_r($layout);die;

        // echo "Index action";
        // echo dirname(__FILE__);
    }
    public function saveAction(){
        echo "this is a file name";
    }
}