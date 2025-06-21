<?php 
class waifu extends controller{
    public function index(){
        $data['judul'] = 'halaman waifu';
        $data['waifu'] = $this->model('waifu_model')->getwaifu();
        $this->view('tamplet/head', $data);
        $this->view('waifu/daftar',$data);
        $this->view('tamplet/footer', $data);
    }
    public function detail($id){
        $data['judul'] = 'halaman detail';
        $data['waifu'] = $this->model('waifu_model')->getwaibyid($id);
        $this->view('tamplet/head', $data);
        $this->view('waifu/detail',$data);
        $this->view('tamplet/footer',$data);
    }
    public function tambah(){
        if($this->model('waifu_model')->tambah($_POST) > 0){
            msg::setmsg('berhasil','ditambahkan','success');
            header("Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/");
        }else{
            msg::setmsg('gagal','ditambahkan','danger');
            header("Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/");
        }
    }
    public function hapus($id_waifu){
        if($this->model('waifu_model')->hapus($id_waifu)){
            msg::setmsg('berhasil','dihapus','success');
            header("Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/daftar/");
        }else{
            msg::setmsg('gagal','dihapus','danger');
            header('http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/daftar');
        }
    }
    public function update(){
        if($this->model('waifu_model')->upwife($_POST) > 0){
            msg::setmsg('berhasil','update','success');
            header("Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/");
        }else{
              msg::setmsg('gagal','update','danger');
            header("Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/waifu/");
        }
    }
    public function cari(){
        $data['judul'] = 'halaman waifu';
        $data['waifu'] = $this->model('waifu_model')->se();
        $this->view('tamplet/head', $data);
        $this->view('waifu/daftar',$data);
        $this->view('tamplet/footer', $data);
    
    }
}