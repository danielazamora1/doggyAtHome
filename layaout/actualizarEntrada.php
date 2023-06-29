<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$cantidadEntrada = $_POST['cantidadEntrada'];
	$articulos = $_POST['articulos'];
	$entradas = $_POST['entradas'];

	$consulta = "UPDATE entradas_articulos SET cantidadEntrada='$cantidadEntrada', 
	articulos_idArticulos='$articulos', entradas_idEntradas='$entradas' WHERE idEntradasArticulos= '$id'";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:entradas.php");
	} else{
		include('interfazEditarEntrada.php');
	}
?>