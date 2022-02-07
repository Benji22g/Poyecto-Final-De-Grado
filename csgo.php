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
  <title>BookNatur</title>
  <meta name="description" content="Documentação inteligente" />
  <meta name="keywords" content="Documentação inteligente Smart Documentation" />
  <meta name="author" content="Hiosk" />
  <link rel="shortcut icon" href="SmartDocs.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/material-dashboard.css" rel="stylesheet" />
  <link href="css/demo.css" rel="stylesheet" />
  <link href="css/hsk.css" rel="stylesheet" />
  <script src="js/modernizr-custom.js"></script>
</head>

<body class="">
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
          <li class="nav-item active">
            <a class="nav-link" href="csgo.php">
              <p>Busquedas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="dota2.php">
              <p>Reservas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tf2.php">
              <p>Datos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tf2.php">
              <p>Contacta</p>
            </a>
          </li>
          <li class="nav-item active-pro">
            <a class="nav-link" href="minhaconta.php">
              <p>Mi cuenta</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <center>
      <br>
      <div class="produtos">
        <div class="card" style="width:300px">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">AK-47 | Legião de Anúbis</h4>
            <p class="card-text" style="color: black;">Rifle (Oculto)</p>
            <a href="#" class="btn btn-primary">R$ 480,97</a>
          </div>
        </div>
        <div class="card" style="width:300px;">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">M4A4 | Fada dos Dentes</h4>
            <p class="card-text" style="color: black;">Rifle (Secreto)</p>
            <a href="#" class="btn btn-primary">R$ 149,30</a>
          </div>
        </div>
        <div class="card" style="width:300px;">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">Glock-18 | Vogue</h4>
            <p class="card-text" style="color: black;">Pistola (Secreto)</p>
            <a href="#" class="btn btn-primary">R$ 134,47</a>
          </div>
        </div>
      </div>

    </center>
  </div>
  <script src="js/classie.js"></script>
  <script src="js/dummydata.js"></script>
  <script src="js/main.js"></script>
  <script>
    var usuario = "<?php echo $_SESSION['usuario']; ?>";
  </script>
</body>

</html>