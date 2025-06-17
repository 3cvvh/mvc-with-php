<?php 
// function autoload($class){
//     require_once __DIR__ . "/core/". $class . '.php';
// };
// spl_autoload_register("autoload");

spl_autoload_register(function($class){
    require_once __DIR__ .  '/core/' . $class . '.php';
});
function panggil($class){
require __DIR__ . '/controllers/' . $class . '.php';
}
spl_autoload_register('panggil');
 //bootstraping