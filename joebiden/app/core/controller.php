<?php
class controller{
    public function view($view, $data = []){
require_once '../app/views/' . $view . '.php';
    }
    public function model($model){
        require '../app/models/' . $model . '.php';
        return new $model;
    }
}