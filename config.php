<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "encrypt";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Conexión Fallida.')</script>");
}

?>