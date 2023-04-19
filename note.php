<?php
require_once 'resources/php/init.php';

if(!empty($_GET['items'])){
  $insert = new insert($_GET['items']);
  if($insert->insertnote()){
    echo "note insert success!";
  }else{
    echo "note insert error!";
  }
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://kit.fontawesome.com/471326bbab.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<!-- <script src="resources/js/note1.js"></script>  -->
</head>
<div class="container mt-5">
  <form action="" method="GET">
    <div class="row">
      <div class="col">
        <input class="form-control" type="text" name="items" placeholder="insert" required/>
      </div>
      <div class="col-md">
        <input class="btn btn-success" type="submit" value="add"/>
      </div>
    </div>
  </form>
  
</div>
   
    
 
           
     <script src="resources/js/note1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/471326bbab.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>



 