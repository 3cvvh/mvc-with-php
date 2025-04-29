<?php 
function autoload($class){
    require_once "core/". $class . '.php';
};
spl_autoload_register("autoload");