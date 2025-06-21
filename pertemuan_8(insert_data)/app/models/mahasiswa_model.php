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
    public function tambahdata($data){
    $this->database->query("INSERT INTO mahasiswa VALUES ('',?,?,?)");
    $this->database->bind(1,$data['nama']);
    $this->database->bind(2,$data['kelas']);
    $this->database->bind(3,$data['suka']);
    return $this->database->tambah();
}
}