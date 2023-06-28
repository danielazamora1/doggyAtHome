<?php 
	include('conexion.php');

	$id = $_POST['id'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$tipoDocumento = $_POST['tipoDocumento'];
	$documento = $_POST['documento'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	$confirmarContraseña = $_POST['confirmarContraseña'];
	$celular = $_POST['celular'];
	$ciudad = $_POST['ciudad'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$rol = $_POST['rol'];
	$estadoUsuario = $_POST['estadoUsuario'];

	if ($nombres !=null || $apellidos !=null || $tipoDocumento !=null || $documento !=null || $usuario !=null || 
		$contraseña !=null || $confirmarContraseña !=null || $celular !=null || 
		$ciudad !=null || $direccion !=null  || $correo !=null || $rol !=null || $estadoUsuario !=null   ||$contraseña==$confirmarContraseña) {
		$consulta = "UPDATE usuario SET nombres='$nombres', apellidos='$apellidos', tipoDocumento='$tipoDocumento', 
		documento='$documento', usuario='$usuario', contraseña='$contraseña', confirmarContraseña='$confirmarContraseña', 
		celular='$celular', ciudad='$ciudad', direccion='$direccion', correo='$correo', rol_idRol='$rol', estadoUsuario='$estadoUsuario' WHERE idUsuario = '$id'";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:usuarios.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("registroUsuario.html");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>
