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
  NAME VARCHAR(100) NOT NULL UNIQUE);
";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "CREATE TABLE LOCALIDAD(
  ID_LOCALIDAD INT(30) AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(100) NOT NULL UNIQUE);
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
  DATE VARCHAR(100) NOT NULL,
  CAPACITY INT(30) NOT NULL,
  ADDRESS VARCHAR(100) NOT NULL,
  URL VARCHAR(100) NOT NULL,
  RESERVED BOOLEAN NOT NULL,
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

$sql = "INSERT INTO `CATEGORY`(`NAME`) VALUES ('CASAS');";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "INSERT INTO `CATEGORY`(`NAME`) VALUES ('PISOS');";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql = "INSERT INTO `CATEGORY`(`NAME`) VALUES ('CAMPOS');";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Alava')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Albacete')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Alicante')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Almeria')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Ávila')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Badajoz')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Islas Baleares')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Barcelona')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Burgos')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Caceres')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Cadiz')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Castellon')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Ciudad Real')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Cordoba')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('A Coruña')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Cuenca')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Girona')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Granada')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Guadalajara')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Gipuzkoa')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Huelva')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Huesca')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Jaen')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Leon')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Lleida')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Lugo')";


try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Lugo')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Madrid')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Málaga')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Murcia')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Navarra')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Ourense')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Asturias')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Palencia')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Las Palmas')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Salamanca')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Santa Cruz de Tenerife')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Cantabria')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Segovia')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Sevilla')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Soria')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Tarragona')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Teruel')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Toledo')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Valencia')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Valladolid')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Bizkaia')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Zamora')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Zaragoza')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Ceuta')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}

$sql="INSERT INTO LOCALIDAD (NAME) VALUES('Melilla')";

try {
  $conn->query($sql);
} catch (Exception $e) {
}
?>