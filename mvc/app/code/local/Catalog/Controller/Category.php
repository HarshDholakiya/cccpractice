<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action{
    public function viewAction(){
       $layout =  $this->getLayout();
       $layout->getchild('head')->addCss('header.css');
       $layout->getchild('head')->addCss('footer.css');
       $content  = $layout->getChild('content');
       $productView = Mage::getBlock('catalog/category_view');
       $content->addChild('view',$productView);
       $layout->toHtml();

    }
}