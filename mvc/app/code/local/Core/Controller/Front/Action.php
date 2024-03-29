<?php
class Core_Controller_Front_Action
{
    protected $_allowActions = [];
    protected $_layout = null;
    public function __construct(){
        //print_r($this);
        $this->init();
    }
    public function init(){
        
        return $this;
    }
    // public function init(){
    //     $this->getRequest()->getActionName();
    //     if(!in_array($this->getRequest()->getActionName(),$this->_allowActions) &&
    //             !Mage::getSingleton('core/session')->get("logged_in_customer_id")){
    //         $this->setRedirect('customer/account/login');
    //     }
    // }
    public function getLayout()
    {
        if (is_null($this->_layout)) {

            $this->_layout = mage::getBlock('core/layout');
            //echo get_class($block);die;

        }
        return $this->_layout;
        
    }
    public function getRequest(){
        return Mage::getModel("core/request");
      }
      public function setRedirect($url){
        $url=Mage::getBaseUrl($url);
        header('Location:'.$url);
      }
}