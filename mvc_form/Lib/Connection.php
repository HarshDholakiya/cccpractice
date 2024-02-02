<?php
class Lib_Connection{
    protected $conn =null;
    public function __construct(){
        $this->connection();
    }
    public function connection(){
    $this ->conn =  mysqli_connect("localhost","root","","ccc_practice");
    if($this->conn->connect_error){
        die("connection error".$this->conn->connect_error);

    };
    return $this->conn;

    }
    
    public function exec($sql)
    {
    	try {
    		return $this->connection()->query($sql);
    	} catch(Exception $e) {

    		var_dump($e->getMessage());
    	}
    }

}
?>