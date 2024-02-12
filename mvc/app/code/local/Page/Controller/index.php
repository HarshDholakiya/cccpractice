<?php

class Page_Controller_Index extends Core_Controller_Front_Action 
{
    public function indexAction()
    {
        // echo "<pre>";
        $layout = $this->getLayout()->toHtml();
        // print_r($layout);die;

        // echo "Index action";
        // echo dirname(__FILE__);
    }
    public function saveAction(){
        echo "this is a file name";
    }
}