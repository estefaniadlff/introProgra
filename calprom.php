
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<?php 
	
				<p>Indique su nombre <input type="text" name="nombre[]" /></p>
                <p>Indique su calificacion 1: <input type="text" name="calificacion[0][]" /></p>
 				<p>Indique su calificacion 2: <input type="text" name="calificacion[1][]" /></p>
			
		 ?>	
 		<p><input type="submit" value="Enviar" /> <input type="reset" value="Borrar"></p> 
	</body>
</html>