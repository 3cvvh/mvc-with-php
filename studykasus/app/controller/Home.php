<?php
class Home extends controller{
    public function index(){
        $data['judul'] = 'home';
        $this->view('tamplet/head', $data);
        $this->view('home/index');
        $this->view('tamplet/footer', $data);
    }
}