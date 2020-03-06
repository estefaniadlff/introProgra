<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Recepcion de datos</title>
	
</head>
<body>
	<?php 
		//print_r($_POST);
		$nombre=$_POST['nombre'];
		$calificaciones=$_POST['calificacion'];
		for ($i=0; $i < 10; $i++) { 
			echo "El alumno ", $nombre[$i]," tiene las calificaciones de ", "<br>" ;
			for ($j=0; $j < 2; $j++) { 
					echo $calificaciones[$j][$i], "<br>";
			}
		}
	?>
</body>
</html>