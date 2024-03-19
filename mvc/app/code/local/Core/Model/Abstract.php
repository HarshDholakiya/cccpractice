<?php

class Core_Model_Abstract
{
    protected $_data = [];
    protected $_modelClass = '';
    protected $_resourceClass = '';
    protected $_collectionClass = '';
    protected $_resource = null;
    protected $_collection = null;
    public function __construct()
    {
        $this->init();
    }
    public function init()
    {

    }
    public function setResourceClass($resourceClass)
    {
        $this->_resourceClass = $resourceClass;
        return $this;
    }
    public function setCollectionClass($collectionClass)
    {
        $this->_collectionClass = $collectionClass;
        return $this;
    }
    public function setId($id)
    {
        $this->_data[$this->getResource()->getPrimaryKey()] = $id;
        return $this;
    }
    public function getId()
    {
        return $this->_data[$this->getResource()->getPrimaryKey()];
    }

    public function getResource()
    {
        // $class = substr(get_class($this), strpos(get_class($this), "_Model_")+7)."_Model_Resource_".substr(get_class($this), strpos(get_class($this), "_Model_")+7);
        // return new $class();
        return new $this->_resourceClass();
    }
    public function camelCase2UnderScore($str, $separator = "_")
    {
        if (empty($str)) {
            return $str;
        }
        $str = lcfirst($str);
        $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
        return strtolower($str);
    }

    public function __call($name, $args)
    {
        $name = $this->camelCase2UnderScore(substr($name, 3));
        return isset($this->_data[$name]) ? $this->_data[$name] : '';
    }
    public function getCollection()
    {
        $collection = new $this->_collectionClass();
        $collection->setResource($this->getResource());
        $collection->setModel($this->_modelClass);
        $collection->select();
        return $collection;
    }

    public function getTableName()
    {

    }

    public function __set($key, $value)
    {

    }
    public function __get($key)
    {

    }
    public function __unset($key)
    {

    }
    public function getData($key = null)
    {
        return $this->_data;
    }
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
    public function addData($key, $value)
    {
        $this->_data[$key] = $value;
        return $this;
    }
    public function removeData($key = null)
    {
        if (isset($this->_data[$key])) {
            unset($this->_data[$key]);
        }
        return $this;
    }
    protected function _beforeSave()
    {

    }
    protected function _afterSave()
    {

    }
    public function save()
    {
        $this->_beforeSave();
        $this->getResource()->save($this);
        $this->_afterSave();

        return $this;
    }
    public function load($id, $column = null)
    {
        // echo stristr($this->)

        $this->_data = $this->getResource()->load($id, $column);

        return $this;
    }
    public function delete()
    {
        if ($this->getId()) {
            $this->getResource()->delete($this);
        }

        //var_dump($this);
        //var_dump($this->getResource());
        return $this;

    }

}