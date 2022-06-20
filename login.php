<title>Login | Dashboard Admin</title>

<link href="bootstrap/css/login.css" rel="stylesheet"/>

<body>
<div class="container">
<div class="box">
<div class="login-card">
    <h1>Log-in</h1><br>
  <form action="cek_login.php" method="POST">
    <input type="text" id="username" name="username" placeholder="username" required oninvalid="this.setCustomValidity('data username dan password harus di isi!')" oninput="setCustomValidity('')">
    <input type="password" id="password" name="password" placeholder="password" required="required">

    <?php 
                          if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "kosong"){
                              echo "<label class='badge badge-danger'>Username dan password tidak boleh kosong!</label>";
                            }
                            else if($_GET['pesan'] == "usernamepassword"){
                              echo "<label class='badge badge-danger'>Username dan Password salah!</label>";
                            }
                          }
                      ?>

    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  
</div>
</div>
</div>


</body>
</html>    

