<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<form action="formularioDatos.php" method="post" accept-charset="utf-8">
		<p>Indique su direccion de corre: <input type="text" name="correo" /></p>
 		<p>Confirme su direccion de corre: <input type="text" name="correo2" /></p>
 		<p>Indique si quiere recibir correos nuestros
 		<select name="valor">
  			<option value="val1">Sí</option>
  			<option value="val2">No</option>
		</select>
		</p>
 		<p><input type="submit" value="Enviar" /> <input type="reset" value="Borrar"></p> 

	</form>
</head>
<body>
	
</body>
</html>