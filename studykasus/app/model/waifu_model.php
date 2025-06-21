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

    //ini buat about btw, kebalik cuk

        public function tambah($datapost){
        $query = "INSERT INTO mywife VALUES('',?,?,?)";
        $this->dd->query($query);
        $this->dd->bind(1,$datapost['nama']);
        $this->dd->bind(2,$datapost['umur']);
        $this->dd->bind(3,$datapost['foto']);
        $this->dd->execute();
        return $this->dd->rowCount();

    }
    public function hapus($id){
        $this->dd->query("DELETE FROM mywife WHERE id_wife = ?");
        $this->dd->bind(1,$id);
        $this->dd->execute();
        return $this->dd->rowCount();
    }
    public function upwife($data){
        $query = "UPDATE mywife SET nama = ?, umur = ?, foto = ? WHERE id_wife = ?";
        $this->dd->query($query);
        $this->dd->bind(1,$data['nama']);
        $this->dd->bind(2,$data['umur']);
        
        if(!empty($data['foto'])){
            $this->dd->bind(3,$data['foto']);
        }else{
            $this->dd->bind(3,$data['foto_old']);
        }
        $this->dd->bind(4,$data['id_wife']);
        $this->dd->execute();
       return $this->dd->rowCount();
    }
    public function se(){
        $keyword = $_GET['key'] ?? '';
        $query = 'SELECT*FROM mywife WHERE nama LIKE ?';
        $this->dd->query($query);
        $this->dd->bind(1,"%$keyword%");
       return $this->dd->banyak();
    }
}