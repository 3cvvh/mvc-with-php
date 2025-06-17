<?php 
class Home extends controller{
    public function index(){
        $data['judul'] = 'home';
        $this->view('tamplet/header', $data);
        $this->view('home/index',$data);
        $this->view('tamplet/footer',$data);
    }
}   