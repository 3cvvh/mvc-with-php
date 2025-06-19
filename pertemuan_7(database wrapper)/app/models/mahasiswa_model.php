<?php 
class mahasiswa_model{
private $tabel = 'mahasiswa',
        $database;
        public function __construct() {
            $this->database = new db;
        }
    public function getMhs(){
    $this->database->query("SELECT*FROM $this->tabel");
   return $this->database->resultSet();
    }
    public function getMhsById($id){
        $this->database->query("SELECT*FROM $this->tabel WHERE id_mahasiswa = :id");
        $this->database->bind(':id', $id);
        return $this->database->single();
    }
}