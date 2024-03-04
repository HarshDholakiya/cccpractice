<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowedActions = ['form'];
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('product/form.css');
        $layout->getChild('head')->addcss('footer.css');
        $layout->getChild('head')->addjs('form.js');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_Form');
        $child->addChild('form', $productForm);
        $layout->toHtml();
        
    }

    public function saveAction()
    {
        echo "<pre>";
        $data = $this->getRequest()->getParams('catalog_product');
       
        $product = Mage::getModel('catalog/product')
            ->setData($data);
         
            
        $product->save();


        print_r($product);
        $location = Mage::getBaseUrl("admin/catalog_product/list");
        header("Location: $location");
    }
    public function deleteAction(){
        
        $id = $this->getRequest()->getParams("product_id");
        // print_r($data);
        // die;

        $product = Mage::getModel('catalog/product')
                                           ->load($id);
            
            
       $product->delete();
     
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        // echo get_class($layout);
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('product/list.css');
        $layout->getChild('head')->addcss('footer.css');
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addJs('js/head.js');
        // $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getChild('content');
        
        $productForm = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productForm);


        $layout->toHtml();

    }
}