<?php 
class about extends controller{
    public function page(){
        $data['judul'] = 'page'; 
        $this->view('tamplet/header', $data);
      $this->view('about/page',$data);
      $this->view('tamplet/footer',$data);
    }
    public function index($nama = 'xysa', $sekolah = 'mars'){
    $data = ["nama" => "$nama",
            "sekolah" => "$sekolah",
            "judul" => "halaman about"
];      $this->view('tamplet/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplet/footer', $data);
    }
}