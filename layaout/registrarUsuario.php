<br><?php 
	include('conexion.php');

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

	if ($nombres !=null || $apellidos !=null || $tipoDocumento !=null || $documento !=null || $usuario !=null || 
		$contraseña !=null || $confirmarContraseña !=null || $celular !=null || 
		$ciudad !=null || $direccion !=null  || $correo !=null || $rol !=null   ||$contraseña==$confirmarContraseña) {
		$consulta = "CALL pa_registrar_usuario ('$nombres', '$apellidos', 
		'$tipoDocumento', '$documento', '$usuario', '$contraseña', '$confirmarContraseña', '$celular', 
		'$ciudad', '$direccion', '$correo', '$rol')";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:usuarios.php");
	mysqli_free_result($resultado);
	?>
	<?php
	} else{
		include("registroUsuario.html");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>

