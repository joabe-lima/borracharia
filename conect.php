<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_mg";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("falha na conexão: " . conn->connect_error);
}

?>