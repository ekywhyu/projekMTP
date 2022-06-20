<?php 
		include 'konek.php';

		if (isset($_POST['submit'])) {
			
		$pnama = $_POST['pnama'];
		$pharga = $_POST['pharga'];
		$pjumlah = $_POST['pjumlah'];
		$pfoto = $_FILES['pfoto']['name'];
		$pdeskripsi = $_POST['pdeskripsi'];

		if ($pfoto !="") {
			$ekstensiboleh = array('png','jpg','jpeg');
			$x = explode('.', $pfoto);
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['pfoto']['tmp_name'];
			$acak = rand(1,999);
			$namabaru = $acak.'-'.$pfoto;

				if (in_array($ekstensi, $ekstensiboleh) === true) {
					move_uploaded_file($file_tmp, 'foto/'.$namabaru);

					$tampil ="INSERT INTO produk (
								pnama, pharga, pjumlah, pfoto, pdeskripsi)
							VALUES ('$pnama', '$pharga', '$pjumlah', '$namabaru', '$pdeskripsi')";
					$result = mysqli_query($konek, $tampil);

					if (!$result) {
						die("Query gagal : ".mysqli_errno($konek)."-".mysqli_error($konek));
					}else{
						header("location:data_produk.php?pesan=berhasil");
					}
				}else{
					 header("location:tambah_produk.php?pesan=gagal");
					}
				}else{
					$tampil ="INSERT INTO produk (
								pnama, pharga, pjumlah, pdeskripsi, pfoto)
							VALUES ('$pnama', '$pharga', '$pjumlah', '$pdeskripsi', NULL)";
							$result = mysqli_query($konek, $tampil);
							if (!$result) {
								die("Query gagal : ".mysqli_errno($konek)."-".mysqli_error($konek));
							} else{
								header("location:data_produk.php?pesan=berhasil");
							}
				}
	}	
	
		
			?>