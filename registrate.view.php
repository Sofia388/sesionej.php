	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrate</title>
</head>
<body>
	<div>
		<h1 class="titulo">Registrate</h1>
		<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
	<div class="form-group">
		<input type="text" name="nombre" class="usuario" placeholder="nombre">
	</div>
	
	<div >
		<input type="password" name="password" class="password" placeholder="contraseña"><br>
	</div>

	<div class="form-group">
		<input type="password" name="password2" class="password_btn" placeholder="Confirmar contraseña"><br><br>
		<button type="button" onclick="login.submit()">Registrate</button>
	</div>


	 <?php
		 if(!empty($errores));
		 ?>
		 <div>
		 	<ul>
		 		<? php echo $errores; ?>
		 	</ul>

		 </div>
		<? php endif; ?>
</form>
 <p>
 	¿Ya tienes cuenta?<br>
 	<a hedar="login.view.php">Iniciar Secion</a>
 </p>
</div>
</body>
</html>