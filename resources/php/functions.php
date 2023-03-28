<?php
session_start();
error_reporting(0);
function checkUser(){
    if(!empty($_SESSION['user_name'])){
    }else {
      header('location: index.php');
    }
  
  }
  function log_out(){
    if(isset($_POST['log_out'])){
  session_start();
  session_destroy();
  session_unset();
  unset($_SESSION['user_name']);
    header('location: index.php');
  }
}
function login(){
  if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $login = new login($user_name,$password);
    if($login->loginUser()){
    }else {
      echo  "<script>alert('Invalid Details');</script>"; 
    }
  }
}

?>