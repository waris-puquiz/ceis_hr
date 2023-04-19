<?php
// require_once $_SERVER['DOCUMENT_ROOT'].'/ceis_hr/resources/class/config.php';
 class insrt_account extends config{
    public $user_name;
    public $password;

    public function __construct($user_name,$password){
        $this->user_name = $user_name;
        $this->password = $password;
    }
    public function insert_account(){
        $con = $this->con();
        // $user_name = $this->user_name;
        // $password = $this->password;
        $sql = "INSERT INTO `accounts`(`user_name`,`password`) VALUES (?,?)";
        $data = $con->prepare($sql);
        if($data->execute( $this->user_name,$this->password)){
            return true;
        }    else{
            return false;
        }
    }
 }

?>