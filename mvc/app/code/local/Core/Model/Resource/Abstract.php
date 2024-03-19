<?php
class Core_Model_Resource_Abstract
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
    public function getAdapter()
    {
        return new Core_Model_Db_Adapter();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id} LIMIT 1";
        //  echo $sql;
        $result = $this->getAdapter()->fetchRow($sql);
        return $result;
        //print_r($result);
    }
    // public function save(Core_Model_Abstract $abstract)
    // {

    //     $data = $$abstract->getData();
    //     if (isset($data[$this->getPrimaryKey()])) {
    //         unset($data[$this->getPrimaryKey()]);
    //     }
    //     $sql = $this->insertSql($this->getTableName(), $data);
    //     // print_r($sql);
    //     $id = $this->getAdapter()->insert($sql);
    
    //     $abstract->setId($id);
    //     //  var_dump($id);

    // }
    public function save(Core_Model_Abstract $abstract)
    {  
        $data = $abstract->getData();
        
    //    print_r( $data[$this->getPrimaryKey()]);
        // var_dump($abstract->getId());
        if(($data[$this->getPrimaryKey()]) && !empty($data[$this->getPrimaryKey()]))
        {
            // unset($data[$this->getPrimaryKey()]);
            
            $sql = $this->updateSql(
                $this->getTableName(),
                $data, 
                [$this->getPrimaryKey()=>$abstract->getId()]
            );
            // print_r($sql);
            // die;
            $id =  $this->getAdapter()->update($sql);
        } else {
           
            $sql = $this->insertSql($this->getTableName(),$data);
            $id =  $this->getAdapter()->insert($sql);
            $abstract->setId($id);
        }

        
        // print_r($product);
    }
   public function updateSql(string $tablename,array $data,array $where)
{
    $c = $w = [];
    foreach ($data as $col => $val) {
        $c[] = "`$col` = '$val'";
    }
    foreach ($where as $col => $val) {
        $w[] = "`$col` = '$val'";
    }

    $c = implode(", ", $c);
    $w = implode(" AND ", $w);

    $query="UPDATE {$tablename} SET {$c} WHERE {$w}";
    return $query;
}
    public function delete(Core_Model_Abstract $abstract){
        $data = $abstract->getId();
        //var_dump($data);
        $sql=$this->deleteSql($this->getTableName(),[$this->getPrimaryKey() => $abstract->getId()]);
       
        $this->getAdapter()->delete($sql);
        echo "record deleted successfully";
    }
    function deleteSql(string $tablename, array $where){
        $w=[];
        foreach($where as $col=>$val){
            
            $w[] = "`$col` = '$val'";
        }
    
        $w = implode(" AND ", $w);
        $query="DELETE FROM {$tablename} WHERE {$w}";
        return $query;
    
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
  
}