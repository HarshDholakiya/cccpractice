<?php 

class Controller_Front{
    public function init()
    {
        $request_uri = new Model_Request();
        $request_uri =  $request_uri->getrequestURI();
        $request_uri = str_replace("/intern_php/practice/mvc_form", "", $request_uri);
        $request_uri = 'view'.$request_uri; 
        $request_uri =  str_replace("/","_", $request_uri);
        $layout = new $request_uri();
        $layout->toHTML();
    }
}

?>