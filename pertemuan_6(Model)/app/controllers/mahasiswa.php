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
}