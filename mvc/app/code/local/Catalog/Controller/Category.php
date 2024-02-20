<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action{
    public function newAction(){
        $layout = $this->getLayout();
    // $layout->getChild('head')->addJs('abc.js');
    $child = $layout->getChild('content');

    $productForm = $layout->createBlock('catalog/admin_category');
    $child->addChild('form', $productForm);
    echo $layout->toHtml();
    }
}