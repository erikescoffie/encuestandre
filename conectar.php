<?php  
	//$conexion = new mysqli("localhost", "usuario", "contraseña", "nombredelabasededatos")

	$conexion = new mysqli("localhost", "root", "", "konkretm_sistemagc");
	mysqli_set_charset($conexion, "utf8");

	//para comprobar la conexion
	if ($conexion -> connect_errno)
	{
		printf("Conexion fallida:", $conexion->connect_error); //imprime el error de conexion
	}
?>