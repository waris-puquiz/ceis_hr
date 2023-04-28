<?php
class login extends config{
  public $user_name;  
  public $pass_word;

  public function __construct($user_name=NULL,$pass_word=NULL){
    $this->user_name = $user_name;
    $this->pass_word = $pass_word;
  }
  public function loginUser(){
        $con = $this->con();
    $user_name = $this->user_name;
    $pass_word = $this->pass_word;
    $sql = "SELECT * FROM `accounts` WHERE `user_name` = '$this->user_name'";
    $data=$con->prepare($sql);
    $data->execute([$user_name]);
    $rows =$data-> fetchAll(PDO::FETCH_ASSOC);
    if ($rows == NULL) {
      return false;
    }else {
        foreach ($rows as $row) {
          $pass_Word =  $row['pass_word'];
          $user_Name =  $row['user_name'];
          }
          if ($pass_word == $pass_Word && $user_name == $user_Name) {
            session_start();
            $_SESSION['user_name'] = $user_name;
            header('location: dashboard.php');
          }
          return true;
        }


  }
}
 ?>
