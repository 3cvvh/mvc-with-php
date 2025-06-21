<?php 
class about_model{
    private $db;
    public function __construct() {
        $this->db = new db;
    }
    //ini buat waifu, kebalik anjay
    public function tambah($post_data){
        $query = "INSERT INTO gatau VALUE ('',?)";
        $this->db->query($query);
        $this->db->bind(1,$post_data['pesan']);
        $this->db->execute();
       return $this->db->rowCount();

    }
    public function getpesan(){
        $this->db->query("SELECT*FROM gatau");
        return $this->db->banyak();
    }
}