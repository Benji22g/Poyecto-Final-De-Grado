<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['ID_CATEGORY'])) {
        header("HTTP/1.1 200 OK");
        $idCategory = $_GET['ID_CATEGORY'];
        $orderBD = "SELECT * FROM ALOJAMIENTO WHERE ID_CATEGORY='$idCategory'";
        $results = mysqli_query($conn, $orderBD);
        $data = array();
        while ($row = mysqli_fetch_object($results)) {
            array_push($data, $row);
        }
        echo json_encode($data);
    } else {
        header("HTTP/1.1 200 OK");
        $orderBD = "SELECT * FROM ALOJAMIENTO";
        $results = mysqli_query($conn, $orderBD);
        $data = array();
        while ($row = mysqli_fetch_object($results)) {
            array_push($data, $row);
        }
        echo json_encode($data);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header("HTTP/1.1 200 INSERT");
    $name = $_GET['NAME'];
    $priceday = $_GET['PRICEDAY'];
    $pricetotal = $_GET['PRICETOTAL'];
    $dateFree = $_GET['DATEFREE'];
    $dateBusy = $_GET['DATEBUSY'];
    $address = $_GET['ADDRESS'];
    $orderBD = "INSERT INTO ALOJAMIENTO(EMAIL,NICK, NAME, LASTNAME, SENHA) VALUES('$name','$nick','$name','$lastname','$priceday')";
    $conn->query($orderBD);
    echo json_encode($conn->insert_id);
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    header("HTTP/1.1 200 UPDATE");
    $name = $_GET['NAME'];
    $priceday = $_GET['PRICEDAY'];
    $pricetotal = $_GET['PRICETOTAL'];
    $dateFree = $_GET['DATEFREE'];
    $dateBusy = $_GET['DATEBUSY'];
    $address = $_GET['ADDRESS'];
    $orderBD = "UPDATE ALOJAMIENTO SET EMAIL='$name', NICK='$nick',NAME='$name',LASTNAME='$lastname' WHERE ID=$idAlojamiento";
    $conn->query($orderBD);
    $orderBD = "SELECT * FROM ALOJAMIENTO WHERE ID='$idAlojamiento'";
    $results = $conn->query($orderBD);
    echo json_encode($results->fetch_all());
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    header("HTTP/1.1 200 DELETE");
    $idAlojamiento = $_GET['ID_ALOJAMIENTO'];
    $orderBD = "DELETE FROM ALOJAMIENTO WHERE ID =$idAlojamiento";
    $conn->query($orderBD);
} else {
    header("HTTP/1.1 400 INVALID REQUEST");
}