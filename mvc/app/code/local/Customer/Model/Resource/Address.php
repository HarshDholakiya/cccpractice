<?php
class Customer_Model_Resource_Address extends Core_Model_Resource_Abstract{
    public function __construct(){
        // $this->_primaryKey = 'customer_id';
        // $this->_tableName = 'customer';
        $this->init('customer_address','address_id');
    }
}