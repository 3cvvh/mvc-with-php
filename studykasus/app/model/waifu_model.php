<?php 
class waifu_model{
    private $dbh,
            $stmt;
public function __construct(){
    $dsn = 'mysql:host=localhost;dbname=waifu';
    try{
        $this->dbh = new PDO($dsn,'root','');
    } catch(PDOException $e){
        die($e->getMessage());
    }
}
    public function getwaifu(){
        $this->stmt = $this->dbh->prepare("SELECT*FROM mywife");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}