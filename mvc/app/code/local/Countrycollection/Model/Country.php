<?php
class Countrycollection_Model_Country extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'Countrycollection_Model_Resource_Country';
        $this->_modelClass = 'countrycollection/country';
        $this->_collectionClass = 'Countrycollection_Model_Resource_Collection_Country';
    }
}