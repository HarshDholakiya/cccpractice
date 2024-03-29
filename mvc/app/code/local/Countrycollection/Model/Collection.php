<?php
class Countrycollection_Model_Collection extends Core_Model_Abstract{
    public function init(){
        $this->_resourceClass = 'Countrycollection_Model_Resource_Collection';
        $this->_modelClass = 'countrycollection/collection';
        $this->_collectionClass = 'Countrycollection_Model_Resource_Collection_Collection';
    }
}