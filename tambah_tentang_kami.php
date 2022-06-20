<?php 
    session_start();
    include 'konek.php';
    $id = $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
   <?php
   include 'sidebar.php';
   include 'topbar.php';
   
   ?>
       

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Tentang Kami</h1>
                    </div>

					<div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Tentang Kami</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            
                                        </a>
                                        
                                </div>
                                </div>
                           <div class="card-body">
                           	<div class="container">

				        <div class="form-group">
				        <form action="proses_tentang_kami.php" method="post" enctype="multipart/form-data">
				            <label>Nama Anda :</label>
				            <input type="text" name="anama" class="form-control" placeholder="Masukan nama" required="" />
				        </div>
					<div class="form-group">
				            <label>Nomer Hp :</label>
				            <input type="text" name="anomer" class="form-control" placeholder="Masukan nomer hp" required="" />
				        </div>
                    <div class="form-group">
                            <label>Nomer Hp Lainnya :</label>
                            <input type="text" name="anomer1" class="form-control" placeholder="Masukan nomer hp lain" required="" />
                        </div>
					<div class="form-group">
					     <label>Email :</label>
					     <input type="text" name="aemail" class="form-control" placeholder="Masukan email" required="" />
					</div> 
				        <div class="form-group">
					     <label>Deskripsi</label>
					     <textarea name="adeskripsi" class="form-control" rows="5" placeholder="" required=""></textarea> 
					</div> 
					<button type="submit" name="submit" class="btn btn-primary btn-sm ">Simpan</button>
					
				    </form>
						</div>
		
                                </div>
                                </div>


            <!-- Footer -->
            <?php
            include 'footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>