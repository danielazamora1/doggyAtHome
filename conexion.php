<?php  
	// crear conexion
	$conexion = mysqli_connect("127.0.0.1", "Daniela","Logan123.","doggyathome");

	// comprobar conexion
	if (!$conexion) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>