<!DOCTYPE html>
<html>
<head>
     <title>rostro</title>
     <link rel="stylesheet" type="text/css" href="rostro.css">
</head>
<body>
	<dir id="contenedor">
		<div id="header">
		<h1>Rostro</h1>
		</div>
		<div id="nav">
			<div id="menu">
				<ul>
					<li><a href="maquetacion.php"> Inicio</a></li>
					<li><a href="ojos.php"> Ojos</a></li>
					<li><a href="labios.php"> Labios</a></li>
					<li><a href="brochas.php"> Brochas</a></li>
				</ul>	
			</div>				
		</div>
		<table align="center">
		<td>
			<img src="https://emani.gt/wp-content/uploads/600-300x300.png" width="300" height="300">
			<p align="center">Primer sin silicona<br>Infusión de más del 9% de aloe vera y 2% de ácido hialurónico<br> Q295.00</p><br>
			<a href="?producto=Prime sin silicona&precio=295">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/212-FAIRLY-LIGHT-1-300x300.jpg" width="300" height="300">
			<p align="center">Base Liquida Hidratante 12HR<br>Q285.00</p><br>
			<a href="?producto=Base Liquida Hidratante 12HR&precio=285">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/700.png" width="300" height="300">
			<p align="center">Primer Miracle 7 en 1<br> Q.375.00</p><br>
			<a href="?producto=Primer Micacle 7 en 1&precio=375">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/294-DEEP-GOLDEN-1.jpg" width="300" height="300">
			<p align="center">Base Mate Anti-Defectos (Polvo Compacto)<br> Q.265.00/p>
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
