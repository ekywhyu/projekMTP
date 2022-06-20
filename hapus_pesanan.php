<?php 
include 'konek.php';
$orderid = $_GET['orderid'];

$tampil = mysqli_query($konek, "DELETE FROM pesanan WHERE orderid='$orderid'")or die(mysqli_error($konek));
 
header("location: data_pesanan.php?pesan=hapus");
?>