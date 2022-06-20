<?php
 include "konek.php";
 		
 		$aid = $_POST['aid'];
		$anama = $_POST['anama'];
		$anomer = $_POST['anomer'];
		$anomer1 = $_POST['anomer1'];
		$aemail = $_POST['aemail'];
		$adeskripsi = $_POST['adeskripsi'];
 
 // query sql
 $tampil = mysqli_query($konek, "UPDATE about SET anama='$anama', anomer='$anomer',
 	anomer1='$anomer1', aemail='$aemail', adeskripsi='$adeskripsi' WHERE aid = '$aid'");
 
if($tampil){
header("location:tentang_kami.php?pesan=berhasil");
} else {
header("location:tentang_kami.php?pesan=gagal");
}
//var_dump($tampil)

?>