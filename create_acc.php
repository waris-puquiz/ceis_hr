<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ceis_hr/resources/class/sign_up.php';
//  login();
if(!empty($_GET)){
    $insert_account = new insert_account ($_GET['user_name'],$_GET['password']);
    $insert_account->insert_account();
    // header('location:dashboard.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta/>
        <title>CEIS</title>
        <link rel="shortcut icon" type="image/x-icon" href="resources/images/favicon-32x32.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://kit.fontawesome.com/471326bbab.css" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="resources/css/log_inn.css"  /> 
<script src="js/app.js"></script>  
</head>
    <body class="intro">
     <div class="container">
      <div class="logo_image text-center">
        <a><img class="ceis_logo pt-5" src="resources/images/logo-ceis.png"/></a>
      </div>
      <div class="row">
        <div class="col">
      <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>

    <!-- Login Form -->
    <form action="" method="GET" class="mt-5">
      <input type="text" id="inputEmail3" id="user_name" class="fadeIn second" name="user_name" placeholder="Username">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" name="update" class="login fadeIn fourth" value="SIGN UP">
    </form>
   
  
   
    <!-- sign up -->
    <div id="formFooter">
      <a href="index.php" class="btn underlineHover" >BACK IN LOG IN PAGE</a>
    </div>
  </div>
</div>

<!-- close tag ng col no.1 -->
</div>
<!-- SIGN UP -->



<!-- close tag ng row -->
</div>
<!-- close tag ng container -->
     </div>    
     
     
     <script src="resources/js/create-modal.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/471326bbab.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>