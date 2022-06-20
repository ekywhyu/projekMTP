
<?php
 include "konek.php";
 		
		$onama = $_POST['onama'];
		$oalamat = $_POST['oalamat'];
		$onomer = $_POST['onomer'];
		$oorder = $_POST['oorder'];
		$opesan = $_POST['opesan'];
 
 // query sql
 $sql = "INSERT INTO pesanan (onama, oalamat, onomer, oorder, opesan) VALUES('$onama','$oalamat','$onomer','$oorder', '$opesan')";
 $query = mysqli_query($konek, $sql) or die (mysqli_error());
 
 if($query){
 	echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='produk.php?pesan=berhasil'</script>";
 } else {
 	header("location:detail_produk.php?pesan=gagal");
 }
 
 mysqli_close($konek);
 
?>
