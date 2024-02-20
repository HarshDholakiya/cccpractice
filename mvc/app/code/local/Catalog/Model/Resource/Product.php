<?php

class Catalog_Model_Resource_Product
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($tablename, $primaryKey)
    {
        $this->_tableName = $tablename;
        $this->_primaryKey = $primaryKey;
    }
    public function getTableName()
    {
        return $this->_tableName;
    }
    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id} LIMIT 1";
        //echo $sql;
        $result = $this->getAdapter()->fetchRow($sql);
        return $result;
        //print_r($result);
    }
    public function save(Catalog_Model_Product $product)
    {

        $data = $product->getData();
        if (isset($data[$this->getPrimaryKey()])) {
            unset($data[$this->getPrimaryKey()]);
        }
        $sql = $this->insertSql($this->getTableName(), $data);
        $id = $this->getAdapter()->insert($sql);
        $product->setId($id);
        // var_dump($id);

    }
    public function insertSql($tbname, $data)
    {
        $columns = $values = [];
        foreach ($data as $key => $val) {
            $columns[] = "`{$key}`";
            $values[] = "'" . addslashes($val) . "'";
        }
        $columns = implode(" , ", $columns);
        $values = implode(" , ", $values);

        return "INSERT INTO {$tbname}({$columns}) VALUES ({$values})";
    }
    public function getAdapter()
    {
        return new Core_Model_Db_Adapter();
    }
    // above part is abstract
    public function __construct()
    {
        $this->init('catalog_product', 'product_id');
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }

}