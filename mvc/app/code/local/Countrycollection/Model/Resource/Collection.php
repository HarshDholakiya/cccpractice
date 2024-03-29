<?php
class Countrycollection_Model_Resource_Collection extends Core_Model_Resource_Abstract{
    public function __construct(){
        // $this->_primaryKey = 'customer_id';
        // $this->_tableName = 'customer';
        $this->init('ccc_collection','id');
    }
}