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
        $data['judul'] = 'pesan';
        $data['pesan'] = $this->model("about_model")->getpesan();
        $this->view('tamplet/head',$data);
        $this->view('about/Service',$data);
        $this->view('tamplet/footer',$data);
    }
    public function tambah(){
        if($this->model('about_model')->tambah($_POST) > 0){
            // Set pesan sukses
            msg::setmsg('Pesan berhasil dikirim', 'tambah', 'success');
            header('Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/about/');
        }else{
            // Set pesan gagal
            msg::setmsg('Pesan gagal dikirim', 'tambah', 'danger');
            header('Location: http://localhost/tes/road%20to%20laravel/mvc/studykasus/public/about/');
        }
    }

}