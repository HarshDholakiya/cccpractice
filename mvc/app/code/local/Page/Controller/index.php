<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo "<pre>";
        $layout = $this->getLayout();
        $layout->getChild("head")->addCss('header.css');
        $layout->getChild("head")->addCss('footer.css');
        $banner = $layout->createBlock('banner/banner');
        $layout->getChild('content')
            ->addChild('banner', $banner);
        $layout->toHtml();
        // $layout->getChild("head")->addjs('js/abc.js');
        // $layout->getChild("head")->addjs('js/bbb.js');

        // $layout->getChild("head")->addcss('css/abc.css');
        // $layout->getChild("head")->addcss('css/bbb.css');

        // $banner = $layout->createBlock('core/template')
        //     ->setTemplate("banner/banner.phtml");

        // $layout->getChild('content')
        //     ->addChild('banner', $banner)
        //     ->addChild('banner1', $banner);

        // print_r($layout->getChild("head"));
        // $layout->toHtml();

        // print_r($layout);die;

        // echo "Index action";
        // echo dirname(__FILE__);
    }
    public function saveAction()
    {
        echo "this is a file name";
    }
}