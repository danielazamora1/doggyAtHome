<?php 
	include('conexion.php');

	$id = $_POST['id'];
	$nombresAdoptante = $_POST['nombresAdoptante'];
	$apellidosAdoptante = $_POST['apellidosAdoptante'];
	$tipoDocumento = $_POST['tipoDocumento'];
	$documento = $_POST['documento'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	$confirmarContraseña = $_POST['confirmarContraseña'];
	$celular = $_POST['celular'];
	$ciudad = $_POST['ciudad'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$estadoAdoptante = $_POST['estadoAdoptante'];

	if ($nombresAdoptante !=null || $apellidosAdoptante !=null || $tipoDocumento !=null || $documento !=null || $usuario !=null || 
		$contraseña !=null || $confirmarContraseña !=null || $celular !=null || 
		$ciudad !=null || $direccion !=null  || $correo !=null || $rol !=null || $estadoAdoptante !=null   ||$contraseña==$confirmarContraseña) {
		$consulta = "UPDATE adoptante SET nombresAdoptante='$nombresAdoptante', apellidosAdoptante='$apellidosAdoptante', 
		tipoDocumento='$tipoDocumento', documento='$documento', usuario='$usuario', contraseña='$contraseña', 
		confirmarContraseña='$confirmarContraseña', celular='$celular', ciudad='$ciudad', direccion='$direccion', 
		correo='$correo', estadoAdoptante='$estadoAdoptante' WHERE idAdoptante = '$id'";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:adoptantes.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("editarAdoptante.php");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>
