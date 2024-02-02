<?php

spl_autoload_register(function ($class){
    $class_name = str_replace("_","/", $class);
    include_once $class_name.'.php';


}
)
?>