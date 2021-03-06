<?php

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("HTTP/1.1 200 OK");
    $orderBD = "SELECT * FROM USUARIOS";
    $results = mysqli_query($conn, $orderBD);
    $data = array();
    while ($row = mysqli_fetch_object($results)) {
        array_push($data, $row);
    }
    echo json_encode($data);
} elseif ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    header("HTTP/1.1 200 UPDATE");
    $idUser = $_GET['ID'];
    $email = $_GET['EMAIL'];
    $nick = $_GET['NICK'];
    $name = $_GET['NAME'];
    $lastname = $_GET['LASTNAME'];
    $password = $_GET['SENHA'];
    $admin = $_GET['ADMIN'];
    $orderBD = "UPDATE USUARIOS SET EMAIL='$email', NICK='$nick',NAME='$name',LASTNAME='$lastname', ADMIN ='$admin' WHERE ID=$idUser";
    $conn->query($orderBD);
    $orderBD = "SELECT * FROM USUARIOS WHERE ID='$idUser'";
    $results = $conn->query($orderBD);
    echo json_encode($results->fetch_all());
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    header("HTTP/1.1 200 DELETE");
    $idUser = $_GET['ID'];
    $orderBD = "DELETE FROM USUARIOS WHERE ID =$idUser";
    $conn->query($orderBD);
} else {
    header("HTTP/1.1 400 INVALID REQUEST");
}
