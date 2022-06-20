<?php 

	include 'connect.php';
	include 'topbar.php';
	include 'sidebar.php';
 ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Setting your website profile.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Your Account</h4>
                  <p class="card-description">
                    Edit Your Account
                  </p>
                  <?php
                            include "connect.php"; //connect database
                            $id_admin = $_SESSION['id_admin'];
                            $database = mysqli_query($yes,"SELECT * FROM admin where id_admin='$id_admin'");
                            foreach ($database as $data) {
                    ?>
                  <form class="forms-sample" method="post" action="update_admin.php">
                  	<div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="hidden" name="id_admin" value="<?php echo $data['id_admin'] ?>">
                      <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="hidden" name="id_admin" value="<?php echo $data['id_admin'] ?>">
                      <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username'] ?>" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="hidden" name="id_admin" value="<?php echo $data['id_admin'] ?>">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password'] ?>" placeholder="Password">
                    </div>
                    <div>
                    	<?php 
        					        if(isset($_GET['pesan'])){
        					          if($_GET['pesan'] == "kosong"){
        					            echo "<label class='badge badge-danger'>Username dan Password tidak boleh kosong!</label>";
        					        	}else if($_GET['pesan'] == "berhasil"){
                              echo "<label class='badge badge-success'>Berhasil Mengubah Data!</label>";
                            }

        					        }
        					  	?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" value="submit" name="submit">Submit</button>
                  </form>
              <?php } ?>
                </div>
              </div>
            </div>
        </div>
        <?php 
        	include 'footer.php'
        ?>
      </div>
    </div>
  </div>
  <script src="template/vendors/base/vendor.bundle.base.js"></script>
  <script src="template/vendors/chart.js/Chart.min.js"></script>
  <script src="template/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="template/js/off-canvas.js"></script>
  <script src="template/js/hoverable-collapse.js"></script>
  <script src="template/js/template.js"></script>
  <script src="template/js/dashboard.js"></script>
  <script src="template/js/data-table.js"></script>
  <script src="template/js/jquery.dataTables.js"></script>
  <script src="template/js/dataTables.bootstrap4.js"></script>
  <script src="template/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>