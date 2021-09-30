<?php  
if ( !isset($_COOKIE["id"])){
    session_start();
    $_SESSION["pesan"] = 'Login terlebih dahulu!';
    header("Location:../index.php");
}
?>