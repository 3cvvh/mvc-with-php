<?php 
class waifu_model{
private $dd;
    public function __construct(){
        $this->dd = new db;
    }
    public function getwaifu(){
        $this->dd->query("SELECT*FROM mywife");
        return $this->dd->banyak();
    }
    public function getwaibyid($id){
        $this->dd->query("SELECT*FROM mywife WHERE id_wife = :id");
        $this->dd->bind(':id',$id);
        return $this->dd->satu();
    }
}