<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultat</title>
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
<header align="center">
				<p class="login-register-text">¿Quieres agregar tu informacion? <a href="index.php">Click Aqui</a>.</p>
</header>
<body>
	<div class="container">
		<form align="center" action="buscar.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Ingrese Curp</p>
			<div class="input-group">
				<input type="text" placeholder="Curp" name="Curp" value="" style="text-transform:uppercase" required>
			</div>
			<p></p>
			<div class="input-group">
				<button onclick="return ConfirmDelete()" name="submit" class="btn">Consultar</button>
			</div>
		</form>
	</div>
</body>
</html>