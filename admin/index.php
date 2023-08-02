<?php

session_start();

if ($_SESSION['status'] != "login") {
  header('location: ../login.php');
}
else{

?>

<?php include '../templates/header.php'; ?>

<?php include '../templates/navbar.php' ?>

<?php include '../templates/sidebar.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= ucfirst($_GET['page']) ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
            <li class="breadcrumb-item active"><?= ucfirst($_GET['page']) ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">

    <?php

    if (isset($_GET['page'])) {

      $page = $_GET['page'];

      switch ($page) {

        case 'login':
          include 'login.php';
          break;

        case 'dashboard':
          include 'modul/dashboard.php';
          break;

        /* Order modul */

        case 'order':
          include 'modul/order/read.php';
          break;

        case 'addorder':
          include 'modul/order/add.php';
          break;

        case 'editorder':
          include 'modul/order/edit.php';
          break;

        case 'deleteorder':
          include 'modul/order/delete.php';
          break;

        /* End Order modul */

        /* Laporan modul */

        case 'laporan':
          include 'modul/laporan/read.php';
          break;

        /* End Order modul */

        default:
          include 'index.php?page=dashboard';
          break;
      }

    }
    else{
      include 'modul/dashboard.php';
    }

    ?>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include '../templates/footer.php' ?>

<?php } ?>