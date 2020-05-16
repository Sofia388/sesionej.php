<?php 
 include('conexion.php');

 $con = new conexion();

$user = $_POST['usuario'];
$pas = $_POST['password'];

$a="SELECT * FROM `usr` WHERE `nombre` = '$user' AND `contraseña` = '$pas' ; ";
$d = $con-> query($a);
$con->close();


if($d->num_rows==1)
{
  header('location: maquetacion.html');
}
else
{
  header('location: login.view.html');
}
?>
