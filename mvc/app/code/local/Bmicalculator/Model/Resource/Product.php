<?php

class Bmicalculator_Model_Resource_Product extends Core_Model_Resource_Abstract
{
   
    // above part is abstract
    public function __construct()
    {
        $this->init('ccc_bmi_calculator', 'id');
    }
    
}