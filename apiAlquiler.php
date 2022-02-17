<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['ID_USER'])) {
        header("HTTP/1.1 200 OK");
        $idUsuario = $_GET['ID_USER'];
        $orderBD = "SELECT * FROM ALQUILER WHERE ID_USER='$idUsuario'";
        $results = mysqli_query($conn, $orderBD);
        $data = array();
        while ($row = mysqli_fetch_object($results)) {
            array_push($data, $row);
        }
        echo json_encode($data);
    } else {
        header("HTTP/1.1 200 OK");
        $orderBD = "SELECT * FROM ALQUILER";
        $results = mysqli_query($conn, $orderBD);
        $data = array();
        while ($row = mysqli_fetch_object($results)) {
            array_push($data, $row);
        }
        echo json_encode($data);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("HTTP/1.1 200 INSERT");
    $assesment = $_POST['ASSESSMENT'];
    $state = $_POST['STATE'];
    $idAlojamiento = $_POST['ID_ALOJAMIENTO'];
    $idUsuario = $_POST['ID_USER'];
    $orderBD = "INSERT INTO ALQUILER (ASSESSMENT,STATE,ID_ALOJAMIENTO, ID_USER) VALUES($assesment,$state,$idAlojamiento,$idUsuario)";
    $conn->query($orderBD);
    echo json_encode($conn->insert_id);
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    header("HTTP/1.1 200 INSERT");
    $idAlquiler = $_GET['ID_ALQUILER'];
    $assesment = $_POST['ASSESSMENT'];
    $state = $_POST['STATE'];
    $idAlojamiento = $_POST['ID_ALOJAMIENTO'];
    $idUsuario = $_POST['ID_USER'];
    $orderBD = "UPDATE ALQUILER SET ASSESSMENT='$assesment',STATE='$state', ID_ALOJAMIENTO='$idAlojamiento', ID_USER='$idUsuario' WHERE ID_ALQUILER= $idAlquiler";
    $conn->query($orderBD);
    echo json_encode($conn->insert_id);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        header("HTTP/1.1 200 DELETE");
        $iduser = $_GET['ID_USER'];
        $idAlojamiento = $_GET['ID_ALOJAMIENTO'];
        $orderBD = "DELETE FROM ALQUILER WHERE ID_ALOJAMIENTO =$idAlojamiento AND ID_USER = $iduser";
        $conn->query($orderBD);
} else {
    header("HTTP/1.1 400 INVALID REQUEST");
}
