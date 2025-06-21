<?php 
class mahasiswa extends controller{
    public function index(){
        $data['judul'] = 'halaman mahasiswa';
        $data['siswa'] = $this->model('mahasiswa_model')->getMhs();
        $this->view('tamplet/header', $data);
        $this->view('tamplet/navbar',$data);
        $this->view('mahasiswa/daftar',$data);
        $this->view('mahasiswa/daftar',$data);
    }
    public function detail($id){
        $data['siswa'] = $this->model('mahasiswa_model')->getMhsById($id);
        $data['judul'] = 'halaman detail';
        $this->view('tamplet/header', $data);
        $this->view('tamplet/navbar');
        $this->view('mahasiswa/detail', $data);
        $this->view('tamplet/footer');
    }
    public function tambah(){
        if($this->model('mahasiswa_model')->tambahdata($_POST) > 0){
            msg::setflash('berhasil','ditambahkan','success');
            header("Location: http://localhost/tes/road%20to%20laravel/mvc/pertemuan_9(iflash_msg)/public/mahasiswa/");
        }else{
            msg::setflash('gagal','ditambahkan','danger');
              header("Location: http://localhost/tes/road%20to%20laravel/mvc/pertemuan_9(iflash_msg)/public/mahasiswa/");
        }
    }
}