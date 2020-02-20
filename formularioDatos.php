<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Datos </title>
</head>
<body>
	
	<?php 
	$correo= $_POST['correo'] ;
	$correo2= $_POST['correo2'];
	$valor=$_POST['valor'];
	if ($correo==$correo2) {
		echo "Su direccion de correo es ". "<strong>".$correo ."</strong>";
		if ($valor=="val1") {
			echo " <br><strong> Sí</strong> recibira correos nuestros";
		}
		else{
			echo "<strong> No</strong> recibira correos nuestros";
		}
	}
	else{
		echo "No coincide su direccion de correo";
	}

	?>
	<br>
	<a href="formulario.php" title="Regresar">Regresar</a>
		
	
</body>
</html>