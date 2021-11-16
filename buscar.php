<?php  
include("config.php");
$cur = base64_encode($_POST['Curp']);
$registro= mysqli_query($conn, "SELECT * FROM datos WHERE Curp = '$cur'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<header align="center">
				<p class="login-register-text">¿Quieres agregar tu informacion? <a href="index.php">Click Aqui</a>.</p>
				<p class="login-register-text">¿Quieres ver tu informacion? <a href="datos.php">Click Aqui</a>.</p>

</header>
<table CELLPADDING="10" align="center" border="2" >
	<?php
$row=mysqli_fetch_array($registro);

	?>
	<tr>
		<td>Curp</td><td><?php echo $row["Curp"];?> </td>
	</tr>
	<tr>
		<td>Nombre</td><td><?php echo $row["Nombre"];?> </td>
	</tr>
	<tr>
		<td>Fecha de Nacimiento</td><td><?php echo $row["Fecha"];?> </td>
	</tr>
	<tr>
		<td>Direccion</td><td><?php echo $row["Direccion"];?> </td>
	</tr>
</table>


</body>
</html>