<?php
class Countrycollection_Model_Resource_Country extends Core_Model_Resource_Abstract{
    public function __construct(){
      
        $this->init('ccc_country','id');
    }
}