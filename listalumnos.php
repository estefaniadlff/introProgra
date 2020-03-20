<!DOCTYPE html>
<html>
<head>
	<title>Arrays con nombre</title>
</head>
<body>
<form action="listalumnos.php" method="POST">
	
<br>Nombre:
<input type="text" name="info[nombre]" required>

<br>Matricula:
<input type="number" name="info[matricula]" required>

<br>Edad:
<input type="number" name="info[edad]" required>

<br>Carrera:
<input type="text" name="info[carrera]" required>

<br>Email:
<input type="text" name="info[email]" required>

<br>Telefono:
<input type="number" name="info[telefono]" required>

<br>Tutor:
<input type="text" name="info[tutor]" required>

<br>nacimiento
<input type="text" name="info[fecha de nacimiento]" required>
<br>
<input type="submit" value="enviar"> <input type="reset" value="Borrar">


<?php
if (isset($_POST['info'])) {

	$array=$_POST['info'];

	$nombre=$array["nombre"];
	$matricula=$array["matricula"];
	$edad=$array["edad"];
	$carrera=$array["carrera"];
	$email=$array["email"];
	$telefono=$array["telefono"];
	$tutor=$array["tutor"];
	$nacimiento=$array ["fecha de nacimiento"];

	if ($matricula>=100 and $matricula<=1000) {
		echo "<br>Se muestran tus datos:<br> 
		Nombre:".$nombre."<br>Matricula:".$matricula."<br>Edad:".$edad."<br>Carrera:".$carrera."<br>Email:".$email."<br>Telefono:".$telefono. "<br>Tutor:".$tutor;
	}

}

?>

</body>
</html>