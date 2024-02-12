<?php

class Core_Controller_Front
{
    public function init()
    {
        
        $request = mage::getModel('core/request');
        $actionName = $request->getActionName().'Action';
        $fullClassName = $request->getFullControllerClass();
        $controller = new $fullClassName();
        $controller->$actionName();
        // echo $fullClassName; die;
        
        // $controllerName = $coreRequestModel->getControllerName();
        // $actionName = $coreRequestModel->getActionName();
        // $actionName .= "Action";

        // $frontControllerClass = $coreRequestModel->getFullControllerClass();
        // $frontControllerObj = new $frontControllerClass();
        // // echo get_class($frontControllerObj);
        // $frontControllerObj->$actionName();
    }
}