<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encriptamiento</title>
</head>
<script type="text/javascript">
  function ConfirmDelete()
  {
    var respuesta = confirm("¿Los datos ingresados son Correctos?");
    if (respuesta==true) {
      return true;
    }else{
      return false;
    }
  }
</script>
<body>
	<div class="container">
		<form align="center" action="guardar.php" method="POST">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Ingrese Datos</p>
			<div class="input-group">
				<p>Ingresa tu Curp</p>
				<input type="text" placeholder="Curp" name="Curp" value="" style="text-transform:uppercase" required>
			</div>
			<p></p>
			<div class="input-group">
				<p>Ingresa tu Nombre Completo</p>
				<input type="text" placeholder="Nombre" name="Nombre" value="" style="text-transform:uppercase" required>
			</div>
			<p></p>
			<div class="input-group">
			  <p>Ingresa tu Fecha de Nacimiento</p>
              <input type="date" id="Fecha_Nacimiento" name="Fecha_Nacimiento" value="2021-11-01" min="1970-01-01" max="2021-12-31" class="form-control" aria-label="Llegada" aria-describedby="button-addon2">
            </div>
            <p></p>
            <div class="input-group">
            	<p>Ingrese su Direccion</p>
					<textarea name="Direccion" rows="10" cols="30"></textarea>
			</div>
			<p></p>
			<div class="input-group">
				<button onclick="return ConfirmDelete()" name="submit" class="btn">Guardar</button>
			</div>
			<p class="login-register-text">Consulta tu informacion? <a href="datos.php">Click Aqui!</a>.</p>
		</form>
	</div>
</body>
</html>