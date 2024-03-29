<?php
class CountryCollection_Block_Form extends Core_Block_Template{
    public function __construct(){
        $this->setTemplate('countrycollection/form.phtml');
    }
    public function getStatusMethod(){
        $list = Mage::getModel('countryCollection/country')->getCollection()->getData()
                                        ;
        return $list;
    }
    public function childoption(){
       
        $id = $this->getRequest()->getParams('id');
       $data =  Mage::getModel('countryCollection/collection')->getCollection()
                 ->addFieldToFilter('country_id',$id)->addFieldToFilter('name',['like'=>'%li%'])->getData();
                 
                //   print_r($data);
        
                 return $data;
   
        
    }
    public function selectedId(){
        $id = $this->getRequest()->getParams('id');
        return $id;
    }
   
}