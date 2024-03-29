<?php
class Model_Request{
    public function __construct(){

}
public function getrequestURI(){
    $request_uri = $_SERVER['REQUEST_URI'];
    // echo  $request_uri; 
    // $request_uri = str_replace("/intern_php/practice/mvc_form", "", $request_uri);
    // // echo  $request_uri; 
    // $request_uri =  str_replace("/","_", $request_uri);
    // $request_uri = 'view'.$request_uri; 
       
      
     return $request_uri;
}
public function getParams($key='')
{
    return ($key==='')? $_REQUEST :(isset($_REQUEST[$key]) ? $_REQUEST[$key] : '') ;
}
public function getPostData($key= ''){
    return ($key==='')?$_POST : (isset($_POST[$key]) ? $_POST[$key] : '');
}
public function getQueryData($key = ''){
    return ($key==='') ? $_GET : (isset($_GET[$key]) ? $_GET[$key] : '');
}
public function isPOST(){
    if($_SERVER['REQUEST_METHOD']==='POST'){
        return true;
    }
        return false;
    
}
}
?>