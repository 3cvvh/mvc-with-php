<?php 
class Home extends controller{
    public function index(){
        $data['judul'] = 'home';
        $data['home'] = 'nav-link active';
        $data['nama'] = $this->model('user_model')->GetUser();
        $this->view('tamplet/header', $data);
        $this->view('tamplet/navbar', $data);
        $this->view('home/index',$data);
        $this->view('tamplet/footer',$data);
    }
}   