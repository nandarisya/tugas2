<?php
if(isset($_COOKIE["id"])){
  header('location:dashboard.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

  <body>

    <div class="container">
<center>

        <form class="form-signin" role="form" method="post" action="actionlogin.php">
          <h2 class="form-signin-heading">Please Sign in</h2><br>
          <input type="text" name="username"  class="form-control"  placeholder="username" required autofocus>
          <input type="password" name="password"  class="form-control"  placeholder="password" required > 
          <button class="btn btn-lg btn-primary btn-block  type="submit">Sign in</button>
          <a href="register.php"><br>
          Don't Have Any Account? Register</a>
        </form>
      
        </label>
      </form>
    </center>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
