<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UD. Tahu SS | Masuk Aplikasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="./"><b>UD. Tahu SS</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan masuk kedalam aplikasi</p>

        <form action="" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="login">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1 mt-4 text-center">
        &copy; Ahmad Latiep - <?= date('Y') ?>
      </p>
    </div>
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
<!-- SweetAlert2 -->
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>

</body>
</html>


<?php

include 'config/koneksi.php';
include 'function/function.php';

session_start();

if (isset($_POST['login'])) {

  $username = antiSQLInjection($_POST['username']);
  $password = antiSQLInjection(md5($_POST['password']));

  $query = mysqli_query($koneksi, "
    SELECT * FROM users WHERE username = '$username' AND password = '$password'
    ");

  $cekLogin = mysqli_num_rows($query);

  if($cekLogin > 0)
  {
    session_start();
    echo "
      <script>
      
      Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: 'Sukses Login',
        }).then(function() {
          window.location = 'admin/';
        });
        
      </script>
    ";
    }
    else{
      echo "

        <script>
        
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Gagal Login',
          });
          
        </script>

      ";
    }


  }


?>