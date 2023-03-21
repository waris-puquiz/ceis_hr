<?php
class login extends config{
  public $user_name;
  public $password;

  public function __construct($user_name=NULL,$password=NULL){
    $this->user_name = $user_name;
    $this->password = $password;
  }
  public function loginUser(){
        $con = $this->con();
    $user_name = $this->user_name;
    $password = $this->password;
    $sql = "SELECT * FROM `accounts` WHERE `user_name` = '$this->user_name'";
    $data=$con->prepare($sql);
    $data->execute([$user_name]);
    $rows =$data-> fetchAll(PDO::FETCH_ASSOC);
    if ($rows == NULL) {
      return false;
    }else {
        foreach ($rows as $row) {
          $passWord =  $row['password'];
          $user_Name =  $row['user_name'];
          }
          if ($password == $passWord && $user_name == $user_Name) {
            session_start();
            $_SESSION['user_name'] = $user_name;
            header('location: viewpage.php');
          }
          return true;
        }


  }
}
 ?>
