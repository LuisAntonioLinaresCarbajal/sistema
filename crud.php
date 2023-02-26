<?php
session_start();
if (!$_SESSION['ida']) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Perfiles y Usuarios</title>
<!--icono de la pagina-->
<link rel="shortcut icon" href="img/logoAlfonsoMArina.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<style>


.vertical-center {

  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
</style>
</head>
<body>

<div class="icon-bar">
  <a class="active" href="dashboardadmin.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
  
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class="container" >
  
  <div class="vertical-center">
  <font size="+4">Alfonso Marina. <b>
  </font>
  </div>
</div>

</body>
</html> 