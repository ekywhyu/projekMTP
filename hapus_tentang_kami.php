<?php 
include 'konek.php';
$aid = $_GET['aid'];

$tampil = mysqli_query($konek, "DELETE FROM about WHERE aid='$aid'")or die(mysqli_error($konek));
 
header("location: tentang_kami.php?pesan=hapus");
?>