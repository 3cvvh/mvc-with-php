<?php 
class about{
    public function index(){
        echo 'about/' . __METHOD__; 
    }
    public function page($nama = 'gapunya nama', $sekolah = 'ga punya sekolah'){
        echo "halo nama saya $nama saya bersekolah di $sekolah";
    }
}