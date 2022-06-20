<!DOCTYPE html>
<html lang="en">

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
    <link href="css/table.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
    .textsk{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /*number of lines to show */
        -webkit-box-orient: vertical;
    }
    </style>

</head>


<body id="page-top">

    <!-- Page Wrapper -->
   <?php
   include 'sidebar.php';
   include 'topbar.php';
  
   ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        

            <!-- Main Content -->
            

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
                        
                    </div>

                   
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pesanan</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            
                                        </a>
                                        
                                </div>
                                </div>

                                       
                                
                        <div class="card-body">
                            <div class="rspv-tabel">
                                <table>
                                     <tr>
                                       <th scope="col" width="3%">No</th>
                                       <th scope="col" width="20%">Nama Pembeli</th>
                                       <th scope="col" width="10%">Alamat</th>
                                       <th scope="col" width="5%">Nomer Hp</th>
                                       <th scope="col" width="10%">Orderan</th>
                                       <th scope="col">Pesan</th>
                                       <th scope="col" width="12%">Aksi</th>
                                     </tr>
                                   

                                   <?php 

                            include "konek.php"; //connect database
                                $no = 1;
                                $tampil = mysqli_query($konek, "SELECT * from pesanan order by orderid desc");
                                    while($data = mysqli_fetch_array($tampil)) :
                                ?>
                                      <tr>
                                        <th scope="row"><?=$no++; ?></th>
                                        <td class="textsk"><?=$data['onama']; ?></td>
                                        <td><?=$data['oalamat']; ?></td>
                                        <td><?=$data['onomer']; ?></td>
                                        <td><?=$data['oorder']; ?></td>
                                        <td class="textsk"><?=$data['opesan'];?></td>
                                        <td><a href="hapus_pesanan.php?orderid=<?php echo $data['orderid'];?>" class="d-none d-sm-inline-block btn-space btn-sm btn-danger shadow-sm"><i
                                class="fas fa-sm text-white-30"></i>Hapus</a></td>
                                      </tr>
                                   
                                <?php endwhile; ?>
                                </table>
                                </div>
                                
                                </div>
                           

                        <!-- Pie Chart -->
                       

                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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