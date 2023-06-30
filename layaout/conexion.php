<?php  
	// crear conexion
	$conexion = mysqli_connect("localhost", "root","Juan0912*","doggyathome");

	// comprobar conexion
	if (!$conexion) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>