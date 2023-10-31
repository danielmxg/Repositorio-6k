<?php
include_once 'connect.php';
$mysqli = new mysqli($servername,$username,$password,$database);

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Conexion exitosa...";
}
?>