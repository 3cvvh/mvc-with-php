<?php 
class mahasiswa_model{
private $table = 'mahasiswa',
        $db;
        public function __construct() {
            $this->db = new db();
        }
    public function getMhs(){
        $this->db->query("SELECT*FROM $this->table");
        $this->db->execute();
        return $this->db->fetchall();
    }
    public function getByid($id){
        $this->db->query("SELECT*FROM mahasiswa WHERE id_mahasiswa = :id");
        $this->db->bind(':id',$id);
        $this->db->execute();
        return $this->db->single();
    }
}