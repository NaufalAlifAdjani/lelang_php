
<?php
session_start();
if($_SESSION['status_login_admin']!=true){
}
?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">

        <li><a href="home_admin.php">Home</a></li>
        <li><a href="barang.php">Barang</a></li>
        <li><a href="perlelangan.php">Perlelangan</a></li>

        <?php
          if($_SESSION['level']== 'admin'){
        ?>
          <li><a href="signup.php">signup</a></li>
        <?php
        }
        ?>
        <li><a href="proses_logout.php">Logout</a></li>
  </div>
</nav>
  
</body>
</html>
