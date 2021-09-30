<?php 
session_start();

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

// session_start();
// include "koneksi.php";
// if (isset($_POST["login"])) {
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $sql = mysqli_query($koneksi, "SELECT * FROM adminn WHERE email= '$email' AND pass='$pass'");
//     if(mysqli_num_rows($sql) == 1) {
//         $row = mysqli_fetch_assoc($sql);
//         setcookie("id", $row["id"]);
//         header("Location:home.php");
//     }  else {
//         $_SESSION["pesan"] = "Akun Tidak Ditemukan!";
//         header("Location:login.php");
//      exit;
//    }
// } else {
//     header("Location:login.php");
//     exit;
// }
?>