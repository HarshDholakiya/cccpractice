<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action{
    public function formAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('category/form.css');
        $layout->getChild('head')->addcss('footer.css');
    // $layout->getChild('head')->addJs('abc.js');
    $child = $layout->getChild('content');

    $categoryForm = $layout->createBlock('catalog/admin_category_form');
    $child->addChild('form', $categoryForm);
    echo $layout->toHtml();
    }
    public function saveAction()
    {
        // echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_category');
       
        $product = Mage::getModel('catalog/category')
            ->setData($data);
         
            
        $product->save();


        print_r($product);
    }
    public function deleteAction(){
        
        $id = $this->getRequest()->getParams("category_id");
        // print_r($data);
        // die;

        $product = Mage::getModel('catalog/category')
                                           ->load($id);
            
            
       $product->delete();
     
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        // $layout->getChild('head')->addcss('product/list.css');
        $layout->getChild('head')->addcss('footer.css');
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addJs('js/head.js');
        // $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getChild('content');

        $categoryForm = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $categoryForm);


        $layout->toHtml();

    }
}