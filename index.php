<?php
 require_once 'resources/php/init.php';
 login();

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
      <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>

    <!-- Login Form -->
    <form action="" method="POST" class="mt-5">
      <input type="text" id="inputEmail3" id="" class="fadeIn second" name="user_name" placeholder="Username">
      <input type="password" id="inputPassword3" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" name="login" class="login fadeIn fourth" value="SIGN IN">
    </form>
    <!-- modal -->
    <!-- <div class="overlay hidden"></div>
    <section class="modal hidden">
      <div class="flex">
        <button class="btn-close">⨉</button>
      </div>
      <div>
        <h3>Stay in touch</h3>
        <p>
          This is a dummy newsletter form so don't bother trying to test it. Not
          that I expect you to, anyways.
        </p>
      </div>
    
      <input type="email" id="email" placeholder="brendaneich@js.com" />
      <button class="btn">Do Something</button>
    </section> -->
   
    <!-- sign up -->
    <div id="formFooter">
      <button id="myBtn"  class="btn underlineHover" >Sign up</button>
    </div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>




  </div>
</div>
     </div>    
     
     
     <script src="resources/js/create-modal.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/471326bbab.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>