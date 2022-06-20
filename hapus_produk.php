<?php 
include 'konek.php';
$pid = $_GET['pid'];

$get_foto = "SELECT pfoto FROM produk WHERE pid='$pid'";
$data_produk = mysqli_query($konek, $get_foto);

$foto_lama = mysqli_fetch_array($data_produk);

unlink("foto/".$foto_lama['pfoto']);

$tampil = mysqli_query($konek, "DELETE FROM produk WHERE pid='$pid'")or die(mysqli_error($konek));
 
header("location:data_produk.php?pesan=hapus");
?>