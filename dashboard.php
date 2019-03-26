<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>MY POST</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><font color ="white">Education</font></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="post.php">My Post</a></li>
          </ul>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <?php

    if (isset($_COOKIE["id"])){
    include("koneksi.php");
    }

    else{
    header('location:index.php');
    }
    ?>
          

          <h1 class="page-header">Situs Belajar Online </h1>
          Apakah selama ini media pembelajaran yang dipakai sudah menarik? Sudahkah kita melaksanakan KBM online dengan memanfaatkan situs belajar online? Sudahkah kita tahu alamat website pendidikan untuk media pembelajaran online?
          Seiring makin majunya teknologi informasi, guru memiliki lebih banyak pilihan media pembelajaran berbasis IT. Kita ketahui bersama bahwa media pembelajaran berbasis IT sangatlah banyak. Maka dalam kesempatan kali ini, gurudigital.id hanya akan mengulas  salah satunya saja, yakni media pembelajaran online berbasis website pendidikan / situs belajar online. Kira-kira apakah ini akan menjadi media pembelajaran yang menarik bagi siswa? Kita akan  ketahui nanti setelah baca satu-persatu ulasannya.
          <br>

    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
