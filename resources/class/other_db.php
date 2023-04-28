<?php
class Database{
    private $dsn = "mysql:host=localhost;dbname=ceis_hr";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn,$this->user,$this->pass);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function insert_account($user_name,$pass_word){
        $sql = "INSERT INTO accounts (user_name,pass_word) VALUES (:username,:pass_word)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_name'=>$user_name,'pass_word'=>$pass_word]);
        
        return true;
    }
    
}
?>