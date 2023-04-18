<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ceis_hr/resources/class/config.php';
 class insert_account extends config{
    public $user_name;
    public $password;

    public function __construct($user_name=NULL,$password=NULL){
        $this->user_name = $user_name;
        $this->password = $password;
    }
    public function insert_account(){
        $config = new config;
        $pdo = $config->con();
        $user_name = $this->user_name;
        $password = $this->password;
        $sql = "INSERT INTO `accounts`(`user_name`,`passworsd`) VALUES (?,?)";
        $data = $pdo->prepare($sql);
        $data->execute(["$user_name","$password"]);
    }
 }

?>