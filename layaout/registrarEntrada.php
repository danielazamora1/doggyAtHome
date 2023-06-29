<br><?php 
	include('conexion.php');

	$cantidadEntrada = $_POST['cantidadEntrada'];
	$articulos = $_POST['articulos'];
	$entradas = $_POST['entradas'];

	$consulta = "INSERT INTO entradas_articulos(cantidadEntrada, articulos_idArticulos, entradas_idEntradas) 
	VALUES ('$cantidadEntrada','$articulos','$entradas')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: entradas.php");
	} else{
		include('interfazRegistrarEntrada.php');
	}
	
?>
