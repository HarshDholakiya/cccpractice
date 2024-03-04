<?php
class Banner_Model_Banner extends Core_Model_Abstract
{
    public function init(){
        $this->_resourceClass = 'banner_Model_Resource_banner';
        $this->_modelClass = 'banner/banner';
        $this->_collectionClass = 'banner_Model_Resource_Collection_banner';
}
public function getStatus()
{
    $embeddings = [
        '1' => 'Enabled',
        '0' => 'Disabled',
    ];
    return isset($this->_data['status']) ? $embeddings[$this->_data['status']] : '';
}
public function getBannerImage()
    {
        return Mage::getBaseUrl('media/banner/'.$this->getBannerPath());
    }
}

