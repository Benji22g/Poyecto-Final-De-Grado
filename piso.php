<?php
session_start();

if (!isset($_SESSION['id'])) {
  header('location: login.php');
  exit;
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['id']);
  header("location: login.php");
}
include('usuarios.php');
?>
<!DOCTYPE html>
<html lang="pt-Br" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyItems</title>
  <meta name="description" content="Documentação inteligente" />
  <meta name="keywords" content="Documentação inteligente Smart Documentation" />
  <meta name="author" content="Hiosk" />
  <link rel="shortcut icon" href="SmartDocs.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <link href="css/demo.css" rel="stylesheet" />
  <link href="css/hsk.css" rel="stylesheet" />
  <script src="js/modernizr-custom.js"></script>
</head>

<body class="">
<?php
      if($_SESSION['admin']){
?>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a onClick="window.location.reload();" class="simple-text logo-normal">
      BookNatur
        </a></div>
      <br>
      <center><span class="usertop">Usuário: <span style="font-size: 18px;"><?php echo $_SESSION['usuario'] ?></span></span><br>
        <a href="index.php?logout='1'" class="quitbutton">Deslogar</a><br></li>
      </center>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <p>Início</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="casa.php">
              <p>CASA</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="piso.php">
              <p>PISO</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="campo.php">
              <p>CAMPO</p>
            </a>
          </li>
          <li class="nav-item active-pro">
            <a class="nav-link" href="minhaconta.php">
              <p>Mi cuenta</p>
            </a>
          </li>
        </ul>
      </div>
      <?php
        }else{
      ?>
        <?php require 'menuuser.php' ?>
        <?php
                 }
        ?>
        </div>
        <center>
         <br>
            <div class="produtos">

      <div div>
        <p>jdsahdjsahdjiash</p>
      </div>
  </div>
  <script src="js/classie.js"></script>
  <script src="js/dummydata.js"></script>
  <script src="js/main.js"></script>
  <script>
    var usuario = "<?php echo $_SESSION['usuario']; ?>";
  </script>
</body>

</html>