<?php

class Core_Model_Db_Adapter
{
    public $config = ['host' => 'localhost', 'user' => 'root', 'password' => '', 'db' => 'mvc_practice'];
    public $connect = null;
    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = new mysqli(
                $this->config['host'],
                $this->config['user'],
                $this->config['password'],
                $this->config['db']
            );
        
        }
        return $this->connect;
    }
    public function fetchAll($query)
    {
        $row = [];
        // $this->connect();
        $result = mysqli_query($this->connect(), $query);
        while ($_row = $result->fetch_assoc()) {
            $row[] = $_row;
        }
        return $row;
    }
    public function fetchPairs($query)
    {

    }
    public function fetchOne($query)
    {

    }
    public function fetchRow($query)
    {
        // echo $query;
        // die;
        $row = [];
        // $this->connect();
        $result = mysqli_query($this->connect(), $query);
        while ($_row = $result->fetch_assoc()) {
            // print_r($_row);
            $row = $_row;
        }
        return $row;
    }
    public function insert($query)
    {
        $this->connect();
        // var_dump($query);
        // die;
        $sql = mysqli_query($this->connect(), $query);
       
        if ($sql) {
         
            return mysqli_insert_id($this->connect());
        } else {
            return FALSE;
        }
    }
    public function update($query)
    {
        $this->connect();
        // print_r($query);
        // die;
        $result=mysqli_query($this->connect(), $query);
        // print_r($result);

        if ($result) {
       
          return TRUE;
      } else {
          return FALSE;
      }
    }
    public function delete($query)
    {
          $this->connect();
          $result=mysqli_query($this->connect(), $query);
          if ($result) {
         
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function query($query)
    {

    }

}