<?php
class about extends controller{
    public function index(){
        $data['judul'] = 'home';
        $this->view('tamplet/head', $data);
        $this->view('about/index', $data);
        $this->view('tamplet/footer',$data);
    }
    public function page($tentang = 'saya adalah seorang siswa dari sekolah smkn7 baleendah, saya hobi dalam coding', $umur = '17' , $nama = 'aqil'){
        $data = ["nama" => "$nama",
                "tentang" => "$tentang",  
                "umur" => "$umur",
                "judul" => "page"                          
        
    ];
        $this->view('tamplet/head', $data);
        $this->view('about/page', $data);
        $this->view('tamplet/footer', $data);
    }
    public function Service(){
        $data['judul'] = 'service page';
        $this->view('tamplet/head',$data);
        $this->view('about/Service',$data);
        $this->view('tamplet/footer',$data);
    }

}