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
function insrt_account(){ 
  if(!empty($_GET)){
    // $user_name = $_POST['user_name'];
    // $password =  $_POST['password'];
    $insrt_account = new insert_account($_GET['user_name'],$_GET['password']);
  //   if($insrt_account->insert_account()){
  //     echo "Successfully created account";
  //   }else{
  //     echo "Erro create account";
  //   }
  // }
  $insrt_account->insert_account();
  header('location:ceis_hr/index.php');
}
}
?>