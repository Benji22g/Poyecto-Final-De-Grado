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
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a onClick="window.location.reload();" class="simple-text logo-normal">
          MyItems
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
          <li class="nav-item ">
            <a class="nav-link" href="csgo.php">
              <p>Busquedas</p>
            </a>
          </li>
          <li class="nav-item active">
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
    <br>
    <center>
      <div class="produtos">
        <div class="card" style="width:300px">
          <div class="card-body">
            <h4 class="card-title">Alma Transversante da Testemunha Carmesim (Insculpido)</h4>
            <p class="card-text" style="color: black;">Ombro (Imortal)</p>
            <a href="#" class="btn btn-primary">R$ 3.823,38</a>
          </div>
        </div>
        <div class="card" style="width:300px;">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="https://community.cloudflare.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcUluxpUWETvTO2j0IDEWGJgLFxoob-kOwhunOTDTilLtOOhkYGbmPmmDLfQhGxUpsYiiLiSod-jiQftrxE5YTjwLIGVJFI4M1DXqwS6kO_ugJC_7smfmHp9-n51lHLrUMg/360fx360f" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">Fidelidade Intacta Carmesim beta (Autografado)</h4>
            <p class="card-text" style="color: black;">Equipável (Imortal)</p>
            <a href="#" class="btn btn-primary">R$ 1.851,90</a>
          </div>
        </div>
        <div class="card" style="width:300px;">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="https://community.cloudflare.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcU4vBxaSV7eRvG5mMXGVFpLMQ0P-bCwLABfx_qQTi5V486yxr-HluXzNvWCwzsIvcNwjrnH992t3QLiqRBlMjz6ctOUdVc-Y12CqFjrlejqh5Htot2Xnm2keEzq/360fx360f" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">Lâmina Carmesim da Ordem Perdida (Autografado)</h4>
            <p class="card-text" style="color: black;">Recipiente (Nível Básico)</p>
            <a href="#" class="btn btn-primary">R$ 2.263,31</a>
          </div>
        </div>
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