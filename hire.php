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
          <li class="nav-item active">
            <a class="nav-link" href="hire.php">
              <p>Alquileres</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="users.php">
              <p>Usuarios</p>
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
      <div class="produtoshire">
      <div class="card" style="width:300px">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="img/3643769-building-home-house-main-menu-start_113416.svg" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">CASAS</h4>
            <a href="casa.php" class="btn btn-warning">Enviar</a>
          </div>
        </div>
        <div class="card" style="width:300px;">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="img/bloque-de-pisos.png" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">PISOS</h4>
            <a href="piso.php" class="btn btn-warning">Enviar</a>
          </div>
        </div>
        <div class="card" style="width:300px;">
          <center><img class="card-img-top" style="width:200px; height:200px;" src="img/2d16e03eabc902c00ddaff5e1de304ef-casas-1.png" alt=""></center>
          <div class="card-body">
            <h4 class="card-title">CAMPOS</h4>
            <a href="campo.php" class="btn btn-warning">Enviar</a>
          </div>
        </div>
      </div>
      <div>
        <form id="formularioins">
            <input type="text" name="name" placeholder="name">
            <input type="number" name="priceday" placeholder="priceday">
            <input type="date" name="date" placeholder="date" >
            <input type="number" name="capacity" placeholder="capacity">
            <input type="text" name="address" placeholder="address"><br>
            <input type="text" name="url" placeholder="url">
            <input type="number" name="reserved" placeholder="reserved">
            <input type="text" name="idlocalidad" placeholder="idlocalidad">
            <input type="text" name="idcategory" placeholder="idcategory"><br>
            <button type="submit" name="insert" value="insert"> Insert</button>
        </form>
      </div>
  </div>
  <script src="js/classie.js"></script>
  <script src="js/dummydata.js"></script>
  <script src="js/main.js"></script>
  <script>
    var usuario = "<?php echo $_SESSION['usuario']; ?>";
  </script>
</body>
<script src="./insAlojamiento.js"></script>


</html>