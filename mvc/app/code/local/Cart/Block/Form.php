<?php
class Cart_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/list.phtml');
    }   
    public function getProduct()
    {
        return Mage::getModel('sales/quote_item')
            ->getCollection()
            ->addFieldToFilter('quote_id', Mage::getSingleton('core/session')->get('quote_id'))->getData();
    }
    public function getItem($id)
    {   
        return $this->getProduct()->addFieldToFilter('item_id',$id);
    }
    public function getProductList(){
        return Mage::getModel('catalog/product')->getCollection();
    }

}