<?php 

session_start();

include 'konek.php';

$id_login = $_POST['id_login'];
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($konek,"SELECT * FROM login where username='$username' and password='$password'");
$chek = mysqli_num_rows($data);
 
if($chek > 0){
	foreach ($data as $database) {
		$_SESSION['username'] = $database['username'];
	}
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else if ($username=="" || $password=="") {
	header("location:login.php");
}
else{
	header("location:login.php");
}
?>