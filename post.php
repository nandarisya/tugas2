<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Post</title>
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
            <li><a href="create.php">Create New Post</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li><a href="dashboard.php">Home</a></li>
          <li class="active"><a href="post.php">My Post</a></li>
            <br>
          </ul>
        </div>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">SITUS WEB PENDIDIKAN ONLINE</h1>
          
            <?php
            if (isset($_COOKIE["id"])){
              include("koneksi.php");
              
              $sql = "SELECT * FROM post";
              $result = $conn->query($sql);


              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo " ".$row["waktu"]."<br>"."<br>"."<br>";
                      echo "<h1> ". substr($row["judul"], 0,1000000)."</h1><br>";
                      echo "" . substr($row["isi"], 0,10000000)."<br><br>";
                      echo " <a href='edit.php?id_post=".$row["id_post"]."'>Edit</a> ||";
                      echo " <a onclick=\"return confirm('Are you sure deleting this post?');\" href='hapus.php?id_post=".$row["id_post"]."'>Delete</a><br />";
                      echo "<hr/>";
                  }
              } else {
                  echo "0 results";
              }
            }else{
              header('location:index.php');
            }

              $conn->close();
              ?>
            
          </div>    
      </div>
    </div>

   
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
