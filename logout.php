<?php 
  setcookie("id",null);
  session_destroy();
   header("Location:index.php");
   exit();

 ?>