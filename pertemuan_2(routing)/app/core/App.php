<?php 
namespace app\core;
class App{
    public function __construct() {
        $url = $this->url();
        var_dump($url);
    }
public function url(){
    if(isset($_GET['url'])){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;
    }
}
}