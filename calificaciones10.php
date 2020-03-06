<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	
	<form action="calificacionesDatos.php" method="post" accept-charset="utf-8">
		<?php 
			for( $i=0; $i<10; $i++){ ?>
				<p>Indique su nombre <input type="text" name="nombre[]" /></p>

 				<p>Indique su calificacion 1: <input type="text" name="calificacion[0][]" /></p>
 				<p>Indique su calificacion 2: <input type="text" name="calificacion[1][]" /></p>
			
		<?php } ?>	
 		<p><input type="submit" value="Enviar" /> <input type="reset" value="Borrar"></p> 
	</form>
</body>
</html>