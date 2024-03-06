<?php

class Bmicalculator_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Bmicalculator_Model_Resource_Product';
        $this->_collectionClass = 'Bmicalculator_Model_Resource_Collection_Product';
        $this->_modelClass = 'Bmicalculator/product';
    }
}