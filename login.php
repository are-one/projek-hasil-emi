<?php
session_start();
require "apps/config/Validasi.php";

$ada_sesi = new Validasi();
$ada_sesi->CekStatusLogin();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login BI-SIsPeK | Log in</title>
  <link rel="icon" type="image/png" href="assets/dist/img/logo.jpg">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" 
style="background: url(assets/img/bg.jpg) no-repeat center center fixed; 
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
       opacity: 0.8;">
<div class="login-box">
  <div class="login-logo">
    <a href="assets/index2.html" style="color: white; size: 12pt;"><b>Login BI-SIsPeK</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login untuk memulai</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group has-feedback">
        <select name="hak_akses" class="form-control" required="">
          <option selected="">--Pilih--</option>
          <option value="1">Unit sla</option>
          <option value="2">Driver</option>
          <option value="3">Pegawai</option>
        </select>
      </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block " name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
      if (isset($_POST['login'])) {
          $username =$_POST['username'];
          $password =$_POST['password'];
          $hak_akses=$_POST['hak_akses'];

          $Validasi = new Validasi();
          $Validasi->login($hak_akses,$username,$password);

      }
     ?>


    
      <!-- /.social-auth-links -->

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>
