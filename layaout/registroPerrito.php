<br><?php 
	include('conexion.php');

	$nombre = $_POST['nombre'];
	$caracteristicas = $_POST['caracteristicas'];
	$estadoMascota = $_POST['estadoMascota'];
	$sexo = $_POST['sexo'];
	$fechaIngreso = $_POST['fechaIngreso'];
	$edad = $_POST['edad'];
	$fotoMascota = $_POST['fotoMascota'];
	$raza = $_POST['raza'];
	$estadoPerfilMascota = $_POST['estadoPerfilMascota'];

	if ($nombre !=null || $caracteristicas !=null || $estadoMascota !=null || $sexo !=null || 
		$fechaIngreso !=null || $edad !=null || $raza !=null || $estadoPerfilMascota !=null) {
		$consulta = "INSERT INTO mascota (nombre, caracteristicas, estadoMascota, sexo, fechaIngreso, 
		edad, fotoMascota, raza, estadoPerfilMascota) values ('$nombre', '$caracteristicas', 
		'$estadoMascota', '$sexo', '$fechaIngreso', '$edad', '$fotoMascota', '$raza' '$estadoPerfilMascota')";

$resultado= mysqli_query($conexion,$consulta);
header("location:listaMascotas.php");
mysqli_free_result($resultado);
?>
<h1>Registro guardado</h1>
<?php
} else{
	include("registroPerrito.html");
	?>
	
	<?php
}
	mysqli_close($conexion);
	
?>

