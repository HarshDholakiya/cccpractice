<?php
class Core_Model_Resource_Collection_Abstract
{
    protected $_resource = null, $_select = [], $_data = [], $_model = null;
    public function __construct()
    {
    }
    public function setResource($resource)
    {
        $this->_resource = $resource;
        return $this;
    }
    public function setModel($model)
    {
        $this->_model = $model;
        return $this;
    }
    public function select()
    {
        $this->_select['FROM'] = $this->_resource->getTableName();
        return $this;
    }
    // public function addOrderBy($orderBy){
    //     $this->_select['ORDER BY'] = $orderBy;
    //     return $this;
    // }
    public function addOrderBy($field, $direction = 'ASC')
{
    $this->_select['ORDER BY'][] = array(
        'field' => $field,
        'direction' => strtoupper($direction)
    );
    return $this;
}

    public function addBetween($val1,$field,$val2){
        $this->_select['BETWEEN'][] = array(
            'val1'=>$val1,
            'field'=>$field,
            'val2'=>$val2
        );
        return $this;
    }
    public function addFieldToFilter($field, $value)
    {
        $this->_select['WHERE'][$field][] = $value;
        return $this;
    }
    public function load()
    {
        $sql = "SELECT * FROM {$this->_select['FROM']}";
        if (isset ($this->_select["WHERE"])) {
            $whereCondition = [];
            foreach ($this->_select["WHERE"] as $column => $value) {
                foreach ($value as $_value) {
                    if (!is_array($_value)) {
                        $_value = array('eq' => $_value);
                    }
                    foreach ($_value as $_condition => $_v) {
                        if (is_array($_v)) {
                            $_v = array_map(function ($v) {
                                return "'{$v}'";
                            }, $_v);
                            $_v = implode(',', $_v);
                        }
                        switch ($_condition) {
                            case 'eq':
                                $whereCondition[] = "{$column} = '{$_v}'";
                                break;
                            case 'in':
                                $whereCondition[] = "{$column} IN ({$_v})";
                                break;
                            case 'like':
                                $whereCondition[] = "{$column} LIKE '{$_v}'";
                                break;
                            case 'between':
                                $whereCondition[] = "{$column} BETWEEN '{$_v}'";
                                break;
                            
                        }
                    }
                }
            }
            $sql .= " WHERE " . implode(" AND ", $whereCondition);
            echo $sql;
        }
        // if(isset($this->_select['ORDER BY'])){
        //     $sql .= " ORDER BY {$this->_select['ORDER BY']}";
        // }
        if(isset($this->_select['ORDER BY'])){
            $orderBy = [];
            foreach ($this->_select['ORDER BY'] as $order) {
                $orderBy[] = "{$order['field']} {$order['direction']}";
            }
            $sql .= " ORDER BY " . implode(', ', $orderBy);
        }
        if(isset($this->_select['BETWEEN'])){
            $betweenby = [];
            foreach($this->_select['BETWEEN'] as $between){
                $betweenby[] = "{$between['field']} BETWEEN {$between['val1']} AND {$between['val2']}";
            }
            $sql .= " WHERE " . implode(' AND ', $betweenby);
        }
        $result = $this->_resource->getAdapter()->fetchAll($sql);
        echo $sql;

        foreach ($result as $row) {
            $this->_data[] = Mage::getModel($this->_model)->setData($row);
            // $modelObj = new $this->_model;
            // $this->_data[] = $modelObj->setData($row);
        }

    }
    public function getData()
    {
        $this->load();
        return $this->_data;
    }
    public function getFirstItem()
    {
        $this->load();
        return (isset ($this->_data[0])) ? $this->_data[0] : null;
    }
}
