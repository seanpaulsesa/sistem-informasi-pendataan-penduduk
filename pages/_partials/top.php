<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Aplikasi Pendataan Warga">
    <meta name="author" content="Murti Ayu Wijayanti">
    <link rel="icon" href="../../../favicon.ico">

    <title>Aplikasi Pendataan Warga</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/logo-kota-jayapura.png">

    <!-- DataTable CSS -->
    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/dashboard.css" rel="stylesheet">

    <!-- Date Range Picker style -->
    <link href="../../assets/css/daterangepicker.css" rel="stylesheet">

    <!-- Lightbox style -->
    <link href="../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Bootstrap Select style-->
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">

    <!-- bootstrap 5.3.6 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"> -->

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>

    <?php include('../_partials/navbar.php') ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php include('../_partials/sidebar.php') ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
