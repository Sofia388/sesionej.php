<!DOCTYPE html>
<html>
<head>
     <title>rostro</title>
     <link rel="stylesheet" type="text/css" href="rostro.css">
</head>
<body>
	<dir id="contenedor">
		<div id="header">
		<h1>Labios</h1>
		</div>
		<div id="nav">
			<div id="menu">
				<ul>
					<li><a href="maquetacion.php"> Inicio</a></li>
					<li><a href="rostro.php"> Rostro</a></li>
					<li><a href="ojos.php"> Ojos</a></li>
					<li><a href="brochas.php"> Brochas</a></li>
				</ul>	
			</div>				
		</div>
		<table align="center">
		<td>
			<img src="https://emani.gt/wp-content/uploads/1126-BLUSH-1.jpg" width="600" height="600">
			<p align="center">Lip Shine Gloss<br> Q135.00</p><br>
			<a href="?producto=Labial sin cilicona&precio=135">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/350-AVA-1.jpg" width="600" height="600">
			<p align="center">Lapiz Labial Hidratante<br>Q150.00</p><br>
			<a href="?producto=labia base liquida&precio=150">Comprar</a>
		</td>
	</tr>
</table>

<?php
if (isset($_GET['producto'])) 
{
	include('conexion.php');
	$com= new conexion();
	$pro=$_GET['producto'];
	$pre=$_GET['precio'];

	$o="INSERT INTO `carrito`(`producto`, `precio`) VALUES ('$pro','$pre');";
	$com->query($o);
	$com->close();
	
}
?>

                     <div class="container">
                        <div class="row justify-content-center">
                            <div class="clo-10 ">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Precio</th>
                                    </thead>
                                    <body>

                                        <?php
                                            $carrito=new conexion();
                                            $q="SELECT * FROM `carrito` WHERE 1;";
                                            $compra=$carrito->query($q);
                                            $carrito->close();

                                            while($row=mysqli_fetch_assoc($compra))
                                            {
                                                echo "
                                                        <tr>
                                                            <td>
                                                                <p> ".$row['producto'] ." </p>
                                                            </td>
                                                            <td>
                                                                <p> ".$row['precio'] ." </p>
                                                            </td>
                                                        </tr>
                                                ";
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                     </div>s
        ?>

	</dir>
</body>
</html>
