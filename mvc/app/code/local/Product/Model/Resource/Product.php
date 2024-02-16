<?php

class Product_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($tablename, $primaryKey)
    {
        $this->_tableName = $tablename;
        $this->_primaryKey = $primaryKey;
    }
    public function load($id,$column=null){
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id} LIMIT 1";
        //echo $sql;
        $result=$this->getAdapter()->fetchRow($sql);
        return $result;
        //print_r($result);
    }
    public function getAdapter(){
        return new Core_Model_Db_Adapter();
    }
    // above part is abstract
    public function __construct()
    {
        $this->init('ccc_product', 'product_id');
    }
    public function getPrimaryKey(){
        return $this->_primaryKey;
    }

}