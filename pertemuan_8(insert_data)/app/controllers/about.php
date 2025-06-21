<?php 
class about extends controller{
    public function page(){
        $data['judul'] = 'page'; 
        $data['page'] = 'nav-link active';
        $this->view('tamplet/header', $data);
               $this->view('tamplet/navbar', $data);
      $this->view('about/page',$data);
      $this->view('tamplet/footer',$data);
    }
    public function index($nama = 'xysa', $sekolah = 'mars'){
    $data = ["nama" => "$nama",
            "sekolah" => "$sekolah",
            "judul" => "halaman about"
            , "index" => 'nav-link active'
];      $this->view('tamplet/header', $data);
       $this->view('tamplet/navbar', $data);
        $this->view('about/index', $data);
        $this->view('tamplet/footer', $data);
    }
}