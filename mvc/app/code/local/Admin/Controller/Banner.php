<?php
class Admin_Controller_Banner extends Core_Controller_Admin_Action{
    public function formAction(){
        $layout = $this->getLayout();
        $layout->getChild('head')->addcss('header.css');
        $layout->getChild('head')->addcss('footer.css');
        $bannerForm = $layout->createBlock('banner/form');
        $child = $layout->getchild('content');
        $child->addChild('banner', $bannerForm);
        $layout->toHtml();

    }
    public function saveAction(){
        $bannerData=$this->getRequest()->getParams('banner');
        $bannerFileData = $this->getRequest()->getFileData('banner');
        $bannerName = $bannerFileData['name']['banner_path'];
        $bannerData['banner_path'] = $bannerName;
        $bannerModel = Mage::getModel('banner/banner');
        $bannerMediaPath = Mage::getBaseDir('media/banner/').$bannerName;

        move_uploaded_file(
            $bannerFileData['tmp_name']['banner_path'],
            $bannerMediaPath
        );
        $bannerModel->setData($bannerData)->save();
        $this->setRedirect('admin/banner/list');

    }
    public function listAction(){
        $layout= $this->getLayout();
        $layout->getChild('head')->addCss('header.css');
        $layout->getChild('head')->addCss('footer.css');
        $child = $layout->getChild('content');
        $bannerForm = $layout->createBlock('banner/list');
        $child->addChild('list', $bannerForm);


        $layout->toHtml();
    }
    public function deleteAction(){
        $id= $this->getRequest()->getParams('banner_id');
        $banner = Mage::getModel('banner/banner')
                                           ->load($id);
        $banner->delete();
    }
}