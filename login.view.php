<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inicio de Secion</title>
</head>

<body>
<br><font size="20"><center >Inicio</center></font><br>
<form action="login.php"  method="POST" class="formulario" >

	<div position="center" class="input-group input-group-lg" >
		<font size="5" ><center><label class="form-control">Usuario</label></font><br>
		<input width="70px" height="60px"  class="form-control" aria-label="Sizing example input" size="25" type="text" name="usuario"  placeholder="Usuario">
		<br><small id="emailHelp" class="form-text text-muted">Introduce el usuario que se te ha brindado.</small>
		<br><br></center>
	</div>

	 <div class="form-group">
		<font size="5"><center><label for="exampleInputPassword" >Password</label></font><br>
		<input height="100px" size="25" class="form-control" type="password" name="password" placeholder="Password">
		<br><small id="emailHelp" class="form-text text-muted">Introduce la contraseña correcta.</small>
		<br><br> </center>
	</div>

	<center><button type ="submit" class="btn btn-primary">Iniciar Secion</button></center>
</form>
</body>
</html>
