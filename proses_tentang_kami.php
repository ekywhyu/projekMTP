
<?php
 include "konek.php";
 
		$anama = $_POST['anama'];
		$anomer = $_POST['anomer'];
		$anomer1 = $_POST['anomer1'];
		$aemail = $_POST['aemail'];
		$adeskripsi = $_POST['adeskripsi'];
 
 // query sql
 $sql = "INSERT INTO about (anama, anomer, anomer1, aemail, adeskripsi) VALUES('$anama','$anomer','$anomer1','$aemail',  'adeskripsi')";
 $query = mysqli_query($konek, $sql) or die (mysqli_error());
 
 if($query){
 header("location:tentang_kami.php?pesan=berhasil");
 } else {
header("location:tentang_kami.php?pesan=gagal");
 }
 
 mysqli_close($konek);
 
?>
