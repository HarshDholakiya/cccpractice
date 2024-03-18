<?php
class Catalog_Controller_Product extends Core_Controller_Front_Action{
    public function viewAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('catalog/product/form.css');
        $layout->getChild('head')->addcss('footer.css');
            
        $content = $layout->getChild('content');

        $singleProductView = Mage::getBlock('catalog/product_view');
        $content->addChild('view', $singleProductView);

        $layout->toHtml();
    }
}