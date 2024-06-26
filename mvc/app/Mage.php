<?php

class Mage
{
    private static $registry = [];
    private static $baseDir = 'C:/xampp/htdocs/intern_php/practice/mvc';
    private static $baseUrl = 'http://localhost/intern_php/practice/mvc';

    private static $_singleTon=null;  

    public static function init()
    {
        // $request_model = new Core_Model_Request();
        $frontContoller = new Core_Controller_Front();
        $frontContoller->init();
        // $requestModel = Mage::getModel('core/request');
        // $requestUri = $requestModel->getRequestUri();
        // echo $requestUri;
    }

    public static function getModel($className)
    {
        $className = str_replace('/', '_Model_', $className);
        $className = ucwords($className, '_');
        return new $className();
    }
    public static function getBlock($className)
    {
        $className = str_replace('/', '_Block_', $className);
        $className = ucwords($className, '_');
        return new $className();
    }

                                                                                                                             
 public static function getSingleton($className)
    {
        
        if(isset(self::$_singleTon[$className])){
            return  self::$_singleTon[$className]; 

        }
        else{

            return self::$_singleTon[$className] = self::getModel($className); 
        }
    }
    public static function register($key, $value)
    {
    }
    public static function registry($key)
    {
    }
    public static function getBaseDir($subDir = null)
    {
            if($subDir){
                return self::$baseDir .'/'. $subDir;
            }
            return self::$baseDir.'/';
    }
    public static function getBaseUrl($subUrl = null)
    {
            if($subUrl){
                return self::$baseUrl .'/'. $subUrl;
            }
            return self::$baseUrl;
    }

}