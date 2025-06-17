<?php 
namespace app\core;
class App{
    protected $nama;
    public function set($nama){
        $this->nama = $nama;
    }
    public function tampil(){
        return $this->nama;
    }
}