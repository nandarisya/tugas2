<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>New Post</title>
    <link href="bootstrap.min.css" rel="stylesheet">
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
            <li class="active"><a href="create.php">Create New Post</a></li>
            <li><a href="logout.php">Logout ?</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
         <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="post.php">My Post</a></li>
            <br>
          </ul>
        </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">New Post</h1>
            <div>
              <table>
                
                <form action="" method="post">
              <tr>
                <td> Judul  : </td>
                <td><input type="text" name="judul"></td>
              </tr>
              
              <tr>
                <td> Isi  : </td>
                <td><br><br><textarea name="isi" rows="7" cols="100"></textarea></td>
              </tr>
              <tr>
              <td><td><br><br><input type="submit" value="Save"></td></td>
              </tr>
              <tr>
                <td><br><br><a href ="post.php">Back</a></td>
              </tr>
            </form>
            
            </table>
            </div>
          </div>   
      </div>
    </div>

    <?php

    if (isset($_COOKIE["id"])){
    include("koneksi.php");
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $simpan = mysqli_query($conn,"INSERT INTO post (id_post,judul,isi) VALUES(null,'$_POST[judul]','$_POST[isi]') ");

    if ($simpan) {
       echo "New record created successfully";
       header("location:post.php");
    } else {
        echo " gagal menambahkan post.." ;
      }

    }
  }else{
    header('location:index.php');
  }
    ?>
    
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
