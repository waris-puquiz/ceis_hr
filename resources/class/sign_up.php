<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ceis_hr/resources/class/config.php';
 class insrt_account extends config{
    public $user_name;
    public $password;

    public function __construct($user_name=null,$password=null){
        $this->user_name = $user_name;
        $this->password = $password;
    }
    public function insert_account(){
        $config = new config;
        $pdo = $config->con();
        $user_name = $this->user_name;
        $password = $this->password;
        $sql = "INSERT INTO `accounts`(`user_name`,`password`) VALUES (?,?)";
        $data = $con->prepare($sql);
        $data->execute();

    }
 }

?>