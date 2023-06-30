<?php  
	// crear conexion
	$conexion = mysqli_connect("localhost", "Daniela","Logan123.","doggyathome");

	// comprobar conexion
	if (!$conexion) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>