<?php
// class Product_Controller_Index{
//     public function indexAction(){
//         echo "harsh";
// }
//     public function abcAction(){
//         echo "ha";
// }
// }

class Product_Controller_Index extends Core_Controller_Front_Action{
    
    public function newAction(){
        return dirname(__FILE__);
    }
    public function listAction(){
        return dirname(__FILE__);
    }
    public function saveAction(){
        return dirname(__FILE__);
    }
    public function deleteAction(){
        return dirname(__FILE__);
    }
}