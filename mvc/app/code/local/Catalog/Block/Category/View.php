<?php
class Catalog_Block_Category_View extends Core_Block_Template{
    public function __construct(){
      
        $this->setTemplate('catalog/category/view.phtml');
    }
    public function getProductByCategory()
    {
        $id= $this->getRequest()->getParams('category_id');
        if($id){
        return Mage::getModel('catalog/product')
            ->getCollection()
            ->addFieldToFilter(
                'category_id',
                $this->getRequest()->getParams('category_id')
            )
            ->getData();
    }
$list = Mage::getModel('catalog/product')->getCollection() ;
// ->getData();
return $list->getData();
}
}