<?php

class Bmicalculator_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Bmicalculator_Model_Resource_Product';
        $this->_collectionClass = 'Bmicalculator_Model_Resource_Collection_Product';
        $this->_modelClass = 'Bmicalculator/product';
    }
  

    public function getItemCollection(){
        return Mage::getModel('bmicalculator/product')->getCollection()
            ->addFieldToFilter('session_id', $this->getId());
    }

   

    public function addProduct($data, $weightst, $heightst)
    {
        
        $weightstaus = $weightst;
        $weight = $data['weight'];
        if ($weightstaus == 'pounds'){
            $weight = $weight * 2.20462; 
        }

        $heightstatus = $heightst;
        $height = $data['height'];
        if ($heightstatus == 'feet'){
            $height = $height * 3.28084; 
        }
        $result = $weight/($height * $height);
        $this->setData($data);
        $this->addData('result', $result);
        $this->addData('session_id', 1);
        $this->addData('height', $height);
        $this->addData('weight', $weight);
    

        $this->save();
        
    }
}