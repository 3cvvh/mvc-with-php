<?php
class controller{
    public function view($view, $data = []){
        require '../app/view/' . $view . '.php';
    }
    public function model($model){
        require '../app/model/' . $model . '.php';
        return new $model;
    }
}