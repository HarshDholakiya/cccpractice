<?php
class Bmicalculator_Block_Product extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('bmicalculator/form.phtml');
    }
    public function result(){
        $data= Mage::getModel('bmicalculator/product')
        ->getCollection()
        ->addFieldToFilter(
            'id',
            $this->getRequest()->getParams('bmi')
        )
        ->getData();
    }
 
    
    
}