<?php 
class db{
    private $db_host = DB_HOST,
            $db_username = DB_USER,
            $db_pass = DB_PASS,
            $db_name = DB_NAME,
            $dbh,
            $stmt;
            //dbh = database handler
            public function __construct(){
                $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;
                $option = [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];
                try{
                    $this->dbh = new PDO($dsn, $this->db_username,$this->db_pass,$option);
                }catch(PDOException $e){
                    die($e->getMessage());
                }
            }
            public function query($query){
                $this->stmt = $this->dbh->prepare($query);
            }
            public function bind($param, $value, $type = null){
                if(is_null($type)){
                    switch( true ){
                        case is_int($value) :
                            $type = PDO::PARAM_INT;
                            break;
                            case is_bool($value) :
                                $type = PDO::PARAM_BOOL;
                                break;
                                case is_null($value) :
                                    $type = PDO::PARAM_NULL;
                                    break;
                                    default :
                                    $type = PDO::PARAM_STR;
                    }
                }
                $this->stmt->bindValue($param,$value,$type);
            }
    public function execute(){
    $this->stmt->execute();
}
public function resultSet(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
}
}

