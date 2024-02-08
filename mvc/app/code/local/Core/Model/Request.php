<?php
class Core_Model_Request
{
    protected $_controllerName, $_moduleName, $_actionName;

    public function __construct()
    {
        $requestUri = $this->getRequestUri();
        $requestUri = explode("/", $requestUri);
       $this->_moduleName = $requestUri[0];
         $this->_controllerName = $requestUri[1];
         $this->_actionName = $requestUri[2];
         print_r($requestUri);
    }

    public function getFullControllerClass()
    {
        $controllerClass = implode('_', [ucfirst($this->_moduleName), 'Controller', ucfirst($this->_controllerName)]);
        return $controllerClass;
    }
    public function getModuleName()
    {
        return $this->_moduleName;
    }

    public function getControllerName()
    {
        return $this->_controllerName;
    }
    public function getActionName()
    {
        return $this->_actionName;
    }

    public function getRequestURI()
    {
        $requst = $_SERVER["REQUEST_URI"];
        // echo $requst;
        $arr = str_replace("/intern/practice/mvc/", "", $requst);
        // echo $arr;
        return $arr;
    }

    public function getParams($key = '')
    {
        return ($key == '')
            ? $_REQUEST
            : (isset($_REQUEST[$key])
                ? $_REQUEST[$key]
                : ''
            );
    }
    public function getPostData($key = '')
    {
        return ($key == '')
            ? $_POST
            : (isset($_POST[$key])
                ? $_POST[$key]
                : ''
            );
    }
    public function getQueryData($key = '')
    {
        return ($key == '')
            ? $_GET
            : (isset($_GET[$key])
                ? $_GET[$key]
                : ''
            );
    }
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }
   
}
