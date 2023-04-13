<?php
class signup extends config{
    public $user_name;
    public $password;

    public function __construct($user_name=NULL,$password=NULL){
        $this->user_name = $user_name;
        $this->password = $password;
    }
    public function sign_up(){
        foreach($this->$user_name as $x => $s1){

            $con1 = $this->con();
            $sql1 = "SELECT `id` FROM `accounts` WHERE `user_name` = '$s1'";
            $data1 =$con1->prepare($sql1);
            $data1->execute();
            $seats = $data1->fetchALL(PDO::FETCH_ASSOC);
            foreach($user_names as $user_name){
                $user_nameid[] = $user_name['id'];
            }
        
        $con = $this->con();
        $sql = "INSERT INTO `accounts`(`user_name`, `password`) VALUES (?,?)";
        $data=$con->prepare($sql);
        if($data->execute([$this->user_name,$s1,$user_nameid[$x],$this->password])){
            $m = true;
        }else{
            $m = false;
        }
    }
    return $m;
}
}

?>