<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd="baseprueba";
$conexion= new mysqli($servername,$username,$password,$bd);
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['id'])) {
    $orden= "SELECT * FROM libro WHERE idlibro=".$_GET['id'];
    $result=$conexion->query($orden);
    $columna=$result->fetch_all();
    header("HTTP/1.1 200 OK");
    echo json_encode($columna);
    exit;
  }else{
    $orden= "SELECT * FROM libro";
    $result=$conexion->query($orden);
    $columna=$result->fetch_all();
    header("HTTP/1.1 200 OK");
    echo json_encode($columna);
    exit;
  }
  
}

?>
