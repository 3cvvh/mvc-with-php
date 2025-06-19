<?php 
class waifu extends controller{
    public function index(){
        $data['judul'] = 'halaman waifu';
        $data['waifu'] = $this->model('waifu_model')->getwaifu();
        $this->view('tamplet/head', $data);
        $this->view('waifu/daftar',$data);
        $this->view('tamplet/footer', $data);
    }
}