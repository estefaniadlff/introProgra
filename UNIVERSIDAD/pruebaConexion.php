<?php 
	require("Conexion.php");
	$con=new Conexion;
	$bd=$con->conectar();
	echo $bd;
?>