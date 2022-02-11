<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'myitems';

$conn = new mysqli($server, $username, $password);

if($conn->connect_error){
  die("Conexion no realizada<br>"); 
}
$sql = "CREATE DATABASE ".$database;
try {
  $conn->query($sql);
} catch (Exception $e){
}
try {
  $conn = new mysqli($server, $username, $password,$database);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

$sql = "CREATE TABLE CATEGORY(
  ID_CATEGORY INT(30) AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(100) NOT NULL);
";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "CREATE TABLE LOCALIDAD(
  ID_LOCALIDAD INT(30) AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(100) NOT NULL);
";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "CREATE TABLE USUARIOS(
  ID INT(30) AUTO_INCREMENT PRIMARY KEY,
  EMAIL VARCHAR(100) NOT NULL UNIQUE,
  NICK VARCHAR(100) NOT NULL UNIQUE,
  NAME VARCHAR(100) NOT NULL,
  LASTNAME VARCHAR(100) NOT NULL,
  SENHA VARCHAR(100) NOT NULL,
  ADMIN BOOLEAN NOT NULL);
  ";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "CREATE TABLE ALOJAMIENTO(
  ID_ALOJAMIENTO INT(30) AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(100) NOT NULL UNIQUE,
  PRICEDAY INT(30) NOT NULL,
  PRICETOTAL INT(30) NOT NULL,
  DATEFREE VARCHAR(100),
  DATEBUSY VARCHAR(100),
  ADDRESS VARCHAR(100) NOT NULL,
  ID_LOCALIDAD INT(30),
  ID_CATEGORY INT(30),
  CONSTRAINT FK_LOCALIDAD FOREIGN KEY(ID_LOCALIDAD) REFERENCES LOCALIDAD(ID_LOCALIDAD),
  CONSTRAINT FK_CATEGORY FOREIGN KEY(ID_CATEGORY) REFERENCES CATEGORY(ID_CATEGORY));
  ";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "CREATE TABLE ALQUILER(
  ID_ALQUILER INT(30) AUTO_INCREMENT PRIMARY KEY,
  BOOKING BOOLEAN NOT NULL,
  ASSESSMENT INT(30),
  STATE BOOLEAN NOT NULL,
  ID_ALOJAMIENTO INT(30),
  ID_USER INT(30),
  CONSTRAINT FK_ALOJAMIENTO FOREIGN KEY(ID_ALOJAMIENTO) REFERENCES ALOJAMIENTO(ID_ALOJAMIENTO),
  CONSTRAINT FK_USER FOREIGN KEY(ID_USER) REFERENCES USUARIOS(ID));
  ";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$password = md5("admin");
$sql = "INSERT INTO `USUARIOS`(`EMAIL`, `NICK`, `NAME`, `LASTNAME`, `SENHA`, `ADMIN`) VALUES ('admin@admin','admin','admin','admin','$password','1');";

try {
  $conn->query($sql);
} catch (Exception $e) {
}





?>