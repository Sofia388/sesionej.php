<!DOCTYPE html>
<html>
<head>
     <title>rostro</title>
     <link rel="stylesheet" type="text/css" href="rostro.css">
</head>
<body>
	<dir id="contenedor">
		<div id="header">
		<h1>Brochas</h1>
		</div>
		<div id="nav">
			<div id="menu">
				<ul>
					<li><a href="maquetacion.php"> Inicio</a></li>
					<li><a href="rostro.php"> Rostro</a></li>
					<li><a href="labios.php"> Labios</a></li>
					<li><a href="ojos.php"> Ojos</a></li>
				</ul>	
			</div>			
		</div>
		<table align="center">
		<td>
			<img src="https://emani.gt/wp-content/uploads/BROCHA-PARA-OJOS-1.jpg" width="300" height="300">
			<p align="center">Brocha para Ojos #4<br> Q165.00</p><br>
			<a href="?producto=Brocha4&precio=165">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/BROCHA-PARA-CONTORNO-Y-RUBOR-1.jpg" width="300" height="300">
			<p align="center">Brocha para Contorno y Rubor #2<br>Q215.00</p><br>
			<a href="?producto=Brocha2&precio=215">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/BROCHA-PARA-ILUMINADOR-Y-DIFUMINADOR-1.jpg" width="300" height="300">
			<p align="center">Brocha para Iluminador y Difuminador #6<br> Q.295.00</p><br>
			<a href="?producto=Brocha6&precio=165">Comprar</a>
		</td>
		<td>
			<img src="https://emani.gt/wp-content/uploads/BROCHA-PARA-OJOS-Y-LABIOS-1.jpg" width="300" height="300">
			<p align="center">Brocha para Ojos y Labios #5<br> Q.135.00</p><br>
				<a href="?producto=Brocha5&precio=135">Comprar</a>
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
                     </div>
        ?>
	</dir>
	</form>
</body>
</html>
