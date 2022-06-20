<?php

$konek = mysqli_connect('localhost','root','', 'tokosembako');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>VIEA CRAFT JOGJA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="cari barang">
					</form>
				</div>
				<a class="pull-right" href="./login.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>LOGIN ADMIN</span></a>
                    </i>

                </a>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logoo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./produk.php">Produk</a></li>
							<li><a href="#">Pemesanan</a>
								<ul>
									<li><a href="https://api.whatsapp.com/send?phone=6287839020399">Lewat whatsapp</a></li>
									<li><a href="mailto:edisoebanto55@gmail.com">lewat email</a></li>
									<li><a href="https://www.instagram.com/viea_craftjogja/">lewat instagram</a></li>
								</ul>
							</li>
							<li><a href="./about.php">Tentang kami</a></li>
						</ul>
					</nav>
				</div>
			</section>

			<?php 
						$pid = $_GET['pid'];
                        $tampil = mysqli_query($konek, "SELECT * FROM produk where pid = '$pid'") or die(mysqli_error());
                        while ($data = mysqli_fetch_array($tampil)) {
                        	?>
						

			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
				<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line"><strong>Detail Produk</strong></span></span></span>
									<span class="pull-right">
										
									</span>
								</h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="foto/<?=$data['pfoto'];?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img src="foto/<?=$data['pfoto']; ?>" width="1200px" height="1599px"></a>												
								
							</div>
							<div class="span5">
								<address>
									<strong>Nama Produk:</strong> <br><span style="font-size: 16px"><?=$data['pnama']; ?></span><br>
									<strong>Harga:</strong> <span><?=$data['pharga']; ?></span><br>
									<strong>Stock:</strong> <span><?=$data['pjumlah']; ?></span><br>
									<strong>Deskripsi:</strong> <br><span><?=$data['pdeskripsi']; ?></span><br>
									<br>
									<strong>Pesan Sekarang Melalui :</strong><br>


									<div class="span5"><form action="proses_pesanan.php" class="" method="post" accept-charset="utf-8">
				<input type="hidden" name="csrf_test_name" value="1153dad683608dd0df3d328a51955ccd">               
                
                  <input type="hidden" name="url" value="home">
    				<table>
    				<tr align="left">
    				<th>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Anda <small>*</small></label>
                        <input name="onama" class="form-control" type="text" placeholder="Masukkan Nama" required="">
                      </div>
                      </th>
                      <th>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label >Alamat <small>*</small></label>
                        <input name="oalamat" class="form-control required alamat" type="text" placeholder="Masukkan Alamat" required="">
                      </div>
                    </div>
                  </div> 
                  </th>
                  </tr>
                  <tr align="left">
                  <th>               
                  <div class="row">
                    <div class="col-sm-6" >
                      <div class="form-group">
                        <label>Telepon/Whatsapp <small>*</small></label>
                        <input name="onomer" class="form-control required" type="number" placeholder="Masukkan Telepon/Whatsapp" required="">
                      </div>
                    </div>
                    </th>
                    <th>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pesanan<small> *</small> </label>
                        <input name="oorder" class="form-control" type="text" placeholder="Masukkan Pesanan" required="">
                      </div>
                    </div>
                    </th>
                    </tr>
                  </table>

                  <div class="row">
                  <div class="form-group">
                    <label for="form_name">Pesan <small> *</small></label>
                    <p style="color: red">Sertakan Jumlah Pesanan</p>
                    <textarea name="opesan" class="form-control required" rows="3" style="width: 383px" placeholder="Masukkan Pesan" required=""></textarea>
                  </div>

                  	<div class="form-group">
                  	    <label for="form_name">Tandai Jika Anda Telah Yakin Dengan Pesanan Anda</label><br>
                        <input type="checkbox" name="checkbox" value="" class="form-control" required=""> Iya</input>
                    </div>
                    
                  <div class="form-group">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <br>
                    <button type="submit" style="border-radius: 50px;" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 " data-loading-text="Harap Tunggu..." name="form_contact">Pesan</button>
                    <button type="reset" style="border-radius: 50px;" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 ">Reset</button>
                  </div>
                  </div>
                </form>							
								</address>									
								
							</div>
						</div>

										
							<div class="span9">	
								
						</div>
					</div>
					
				</div>
			</section>	
			<?php } ?>		
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./produk.php">Produk</a></li>
							<li><a href="./about.php">Tentang kami</a></li>							
						</ul>					
					</div>
					<div class="span4">
						
						<ul class="nav">
							
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logoo.png" class="site_logo" alt=""></p>
						
						<br/>
						<span class="social_icons">
							
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
		<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6281215958940", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
    </body>
</html>