<?php
function checkUser(){
    if(!empty($_SESSION['user_name'])){
    }else {
      header('location: login.php');
    }
  
  }
  function logout(){
    if(isset($_POST['logout'])){
  session_start();
  session_destroy();
  session_unset();
  unset($_SESSION['user_name']);
    header('location: login.php');
  }
}
function login(){
  if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $login = new login($user_name,$password);
    if($login->loginUser()){
    }else {
      echo  '<div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
            Login Failed!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
  }
}
?>