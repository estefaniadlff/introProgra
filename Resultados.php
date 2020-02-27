
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Resultados multiplicacion</title>
</head>
<body>
	$resultado=$tabla*$multiplicador
	<?php
	$tabla=$_POST[Tabla];
	$multiplicador=$POST[multiplicador];

	echo $tabla . "<br>". "El resultado de la multiplicacion es :" .$resultado
	
?>
<br>
<a href="tablas.php" title="Regresar">Regresar</a>


</body>
</html>