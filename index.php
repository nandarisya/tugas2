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
    <form id="form-container" class="form-container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Education</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <label for="input">Wikipedia : </label>
            <input type="text" id="input" value="">
            <button id="submit-btn">submit</button>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="login.php">Login and Register</a></li>
              <li class="wikipedia-container">
                  <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
                  <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
              </li>
          </ul>
                  </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">INFORMATION ABOUT TODAY</h1>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["waktu"]."<br>"."<br>";
        echo " - judul: " . $row["judul"]."<br>". "  isi: " . substr($row["isi"], 0.20); }
} else {
    echo "";
}
$conn->close();
?>
</form>

    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
