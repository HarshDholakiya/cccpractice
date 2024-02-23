<?php
class Catalog_Block_Admin_Product extends Core_Block_Template{
  
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/form.phtml');
    }
    public function getProduct(){
       return  Mage::getModel('catalog/product')
            ->load($this->getRequest()->getParams('product_id',0));
    }
}
