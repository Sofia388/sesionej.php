<!DOCTYPE html>
<html>
<head>
     <title>rostro</title>
     <link rel="stylesheet" type="text/css" href="rostro.css">
</head>
<body>
	<dir id="contenedor">
		<div id="header">
		<h1>Ojos</h1>
		</div>
		<div id="nav">
			<div id="menu">
				<ul>
					<li><a href="maquetacion.php"> Inicio</a></li>
					<li><a href="rostro.php"> Rostro</a></li>
					<li><a href="labios.php"> Labios</a></li>
					<li><a href="brochas.php"> Brochas</a></li>
				</ul>	
			</div>				
		</div>
		<table align="center">
			<td>
				<img src="https://emani.gt/wp-content/uploads/MASCARA-DE-SOYA-1.jpg" width="400" height="400">
				<p align="center">Mascara de Soya<br> Q195.00</p><br>
				<a href="?producto=Mascara de soya&precio=195">Comprar</a>
			</td>
			<td>
				<img src="https://emani.gt/wp-content/uploads/409-BLONDE-GREY-1.jpg" width="400" height="400">
				<p align="center">Delineador de Cejas en Crema<br>Q185.00</p><br>
				<a href="?producto=Delineador de Cejas en Crema&precio=185">Comprar</a>
			</td>
			<td>
				<img src="https://emani.gt/wp-content/uploads/443-MELROSE-AVE-1.jpg" width="400" height="400">
				<p align="center">Cuarteto de sombras para Ojos<br> Q. 215.00</p><br>
				<a href="?producto=Cuarteto de sombras para Ojos&precio=215">Comprar</a>
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
