<?php
include 'konek.php';

$pid = $_POST['pid'];
$pnama = $_POST['pnama'];
$pharga = $_POST['pharga'];
$pjumlah = $_POST['pjumlah'];
$pfoto = $_FILES['pfoto']['name'];
$pdeskripsi = $_POST['pdeskripsi'];

if (isset($_POST['submit'])) {
}
if ($pfoto != '') {
	$ekstensiboleh = array('png', 'jpg', 'jpeg');
	$x = explode('.', $pfoto);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['pfoto']['tmp_name'];
	$acak = rand(1, 999);
	$namabaru = $acak . '-' . $pfoto;

	if (in_array($ekstensi, $ekstensiboleh) === true) {
		move_uploaded_file($file_tmp, 'foto/' . $namabaru);
		$result = mysqli_query($konek, "UPDATE produk SET pnama='$pnama', pharga='$pharga', pjumlah='$pjumlah', pfoto='$namabaru', pdeskripsi='$pdeskripsi' WHERE pid='$pid'");
		if (!$result) {
			die("Query gagal : " . mysqli_errno($konek) . "-" . mysqli_error($konek));
		} else {
			header("location:data_produk.php?pesan=update");
		}
	} else {
		header("location:data_produk.php?pesan=ekstensi tidak di perbolehkan");
	}
} else {
	$tampil = mysqli_query($konek, "UPDATE produk SET pnama='$pnama', pharga='$pharga', pjumlah='$pjumlah', pdeskripsi='$pdeskripsi' WHERE pid='$pid'");
	header("location:data_produk.php?pesan=update");
}
