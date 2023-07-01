<br><?php 
	include('conexion.php');

	$cantidadSalidas = $_POST['cantidadSalidas'];
	$articulos = $_POST['articulos'];
	$salidas = $_POST['salidas'];

	$consulta = "CALL pa_registrar_salida ('$cantidadSalidas','$articulos','$salidas')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: salidas.php");
	} else{
		include('interfazRegistroSalida.php');
	}
	
?>
