<?php session_start();

if (isset($SESSION['usuario'])) {
	require 'views/contenido.view.php';
} else {
	header('Location: login.php');
}

?>