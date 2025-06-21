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
        $data['siswa'] = $this->model('mahasiswa_model')->getByid($id);
        $data['judul'] = 'halaman detail';
        $this->view('tamplet/header',$data);
        $this->view('tamplet/navbar');
        $this->view('mahasiswa/detail',$data);
        $this->view('tamplet/footer');
    }
}