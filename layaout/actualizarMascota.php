<?php 
	include('conexion.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$caracteristicas = $_POST['caracteristicas'];
	$estadoMascota = $_POST['estadoMascota'];
	$sexo = $_POST['sexo'];
	$fechaIngreso = $_POST['fechaIngreso'];
	$edad = $_POST['edad'];
	$fotoMascota = $_POST['fotoMascota'];
	$raza = $_POST['raza'];
	$estadoPerfilMascota = $_POST['estadoPerfilMascota'];
	

	if ($nombre !=null || $caracteristicas !=null || $estadoMascota !=null || $sexo !=null || $fechaIngreso !=null || $edad !=null || $raza !=null || $estadoPerfilMascota !=null) {
		$consulta = "UPDATE mascota SET nombre='$nombre', caracteristicas='$caracteristicas', estadoMascota='$estadoMascota', 
		sexo='$sexo', fechaIngreso='$fechaIngreso', edad='$edad', raza='$raza', 
		estadoPerfilMascota='$estadoPerfilMascota' WHERE idMascota = '$id'";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:listaMascotas.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("editarRegistroPerrito.php");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>
