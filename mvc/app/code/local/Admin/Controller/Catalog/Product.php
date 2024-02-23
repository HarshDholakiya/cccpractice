<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('product/form.css');
        $layout->getChild('head')->addcss('footer.css');
        $layout->getChild('head')->addjs('form.js');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product');
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
    }
    public function deleteAction(){
        
        $id = $this->getRequest()->getParams("id");
        // print_r($data);
        // die;

        $product = Mage::getModel('catalog/product')
                                           ->load($id);
            
            
       $product->delete();
     
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addJs('js/head.js');
        // $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_list')
            ->setTemplate('catalog/admin/product/list.phtml');
        $child->addChild('list', $productForm);


        $layout->toHtml();

    }
}