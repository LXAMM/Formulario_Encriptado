<?php  
$Curp = base64_encode($_POST['Curp']);
$Nomb = base64_encode($_POST['Nombre']);
$Fech = $_POST['Fecha_Nacimiento'];
$Dire = base64_encode($_POST['Direccion']);

$cnx = mysqli_connect("localhost", "root", "", "encrypt");
$sql = "INSERT INTO datos (Curp, Nombre, Fecha, Direccion) VALUES ('$Curp', '$Nomb', '$Fech', '$Dire')";

$rta = mysqli_query($cnx, $sql);
header("Location: datos.php");

?>