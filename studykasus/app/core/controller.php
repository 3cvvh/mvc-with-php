<?php
class controller{
    public function view($view, $data = []){
        require '../app/view/' . $view . '.php';
    }
}