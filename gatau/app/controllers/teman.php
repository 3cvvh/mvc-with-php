<?php
class teman extends controller{
    public function index(){
        $data['teman'] = $this->model('temanModel')->temanGyat();
        $this->view('tamplet/header', $data);
        $this->view('tamplet/navbar');
        $this->view('teman/list', $data);
        $this->view('tamplet/footer');
    }
}