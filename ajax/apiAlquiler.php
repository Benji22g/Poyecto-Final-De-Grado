<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("HTTP/1.1 200 OK");
    $orderBD = "SELECT * FROM ALQUILER";
    $results = mysqli_query($conn, $orderBD);
    $data = array();
    while ($row = mysqli_fetch_object($results)) {
        array_push($data, $row);
    }
    echo json_encode($data);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    header("HTTP/1.1 200 DELETE");
    $idAlquiler = $_GET['ID_ALQUILER'];
    $orderBD = "DELETE FROM ALQUILER WHERE ID =$idAlquiler";
    $conn->query($orderBD);
} else {
    header("HTTP/1.1 400 INVALID REQUEST");
}
