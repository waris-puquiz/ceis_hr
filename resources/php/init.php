<?php

require 'functions.php';
spl_autoload_register(function($class){
  require_once $_SERVER['DOCUMENT_ROOT'].'/ceis_hr/resources/class/'.$class.'.php';
});
 ?>