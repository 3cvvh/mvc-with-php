<?php 

// function autoload($class){
//     $class = explode('\\', $class);
//     $class = end($class);
//     require __DIR__ . '/core/' . $class . '.php';
// }
// spl_autoload_register('autoload');
spl_autoload_register(function($class){
    require __DIR__ . '/core/' . $class . '.php';
});