<?php
class config{

    private $user = 'root';
    private $password = '';
    public $dbname='ceis_hr';
    public $host='localhost';
    public $pdo = null;
    public function con(){
      try {
        $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
      }catch(\PDOException $e){
        die($e->getMessage());
      }
      return $this->pdo;
    }
}


?>