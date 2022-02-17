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
    $name = $_POST['NAME'];
    $priceday = $_POST['PRICEDAY'];
    $date = $_POST['DATE'];
    $capacity = $_POST['CAPACITY'];
    $address = $_POST['ADDRESS'];
    $url = $_POST['URL'];
    $reserved = $_POST['RESERVED'];
    $quantityDay = $_POST['QUANTITYDAY'];
    $idlocalidad = $_POST['ID_LOCALIDAD'];
    $idcategory = $_POST['ID_CATEGORY'];
    $orderBD = "INSERT INTO ALOJAMIENTO (NAME,PRICEDAY, DATE, CAPACITY, ADDRESS, URL,RESERVED, QUANTITYDAY,ID_LOCALIDAD,ID_CATEGORY) VALUES('$name',$priceday,'$date',$capacity,'$address','$url',$reserved, $quantityDay, $idlocalidad,$idcategory)";
    $conn->query($orderBD);
    echo json_encode($conn->insert_id);
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    header("HTTP/1.1 200 UPDATE");
    $idAlojamiento = $_GET['ID_ALOJAMIENTO'];
    $reserved = $_GET['RESERVED'];
    $orderBD = "UPDATE ALOJAMIENTO SET RESERVED=$reserved WHERE ID_ALOJAMIENTO=$idAlojamiento";
    $conn->query($orderBD);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    header("HTTP/1.1 200 DELETE");
    $idAlojamiento = $_GET['ID_ALOJAMIENTO'];
    $orderBD = "DELETE FROM ALOJAMIENTO WHERE ID_ALOJAMIENTO = $idAlojamiento";
    $conn->query($orderBD);
} else {
    header("HTTP/1.1 400 INVALID REQUEST");
}
