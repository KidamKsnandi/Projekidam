<?php 
include "sql.php";

$user = new query();

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$auth = $user->login($email, $pass);

	if(!$auth){
		$_SESSION["pesan"] = "Akun Tidak Ditemukan!";
    	header('location:index.php');
	}
	else{
        setcookie("id", $auth["id"]);
		header('location:index/home.php');
	}
}
else{
	$_SESSION["pesan"] = 'Login terlebih dahulu';
	header('location:index.php');
}
?>