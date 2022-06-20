
<?php
 include "konek.php";
 		
		$onama = $_POST['onama'];
		$oalamat = $_POST['oalamat'];
		$onomer = $_POST['onomer'];
		$oorder = $_POST['oorder'];
		$opesan = $_POST['opesan'];
		$pfoto = $_POST['pid'];
		$pid = $_POST['pid'];
 
 // query sql
 $sql = "INSERT INTO pesanan (onama, oalamat, onomer, oorder, opesan, pfoto) VALUES('$onama','$oalamat','$onomer','$oorder', '$opesan', '$pfoto')";
 $query = mysqli_query($konek, $sql);

//  query kurangi
$sql = "SELECT SUM(pjumlah) as jumlah FROM produk WHERE pid='$pid'";
$queryGetDataProduk = mysqli_query($konek, $sql);

$dataProduk = mysqli_fetch_assoc($queryGetDataProduk);
$currentJumlah = $dataProduk['jumlah'] - $oorder;

$sqlKurangi = "UPDATE produk SET pjumlah = '$currentJumlah' WHERE pid='$pid'";
$queryKurangi = mysqli_query($konek, $sqlKurangi);


 if($query){
 	echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='produk.php?pesan=berhasil'</script>";
 } else {
 	header("location:detail_produk.php?pesan=gagal");
 }
 
 mysqli_close($konek);
 
?>
