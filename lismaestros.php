<!DOCTYPE html>
<html>
<head>
	<title>lista maestros</title>
</head>
<body>
	<form action="lismaestros.php" method="POST">
<br>nombre:
<input type="text" name="info[nombre]" required>

<br>no_empleado:
<input type="text" name="info[NumeroEmpleado]">

<br>correo:
<input type="text" name="info[correo]">

<br>carrera:
<input type="text" name="info[carrera]">

<br>especialidad:
<input type="text" name="info[especialidad]">

<br>nacimiento
<input type="text" name="info[FechaNacimiento]">
<br>
<input type="submit" name="enviar"> <input type="reset" value="Borrar">

<?php 
if(isset($_POST["info"])) {
	  
  $array=$_POST["info"];
  $nombre=$array["nombre"];
  $no_empleado=$array["NumeroEmpleado"];
  $correo=$array["correo"];
  $carrera=$array["carrera"];
  $especialidad=$array["especialidad"];
  $nacimiento=$array["FechaNacimiento"];

 echo "<br> Los datos son: <br>" , "nombre:" , $nombre, "<br>Numero de empleado: " , $no_empleado , "<br> Correo : " ,  $correo, "<br> Carrera: " , $carrera, "<br> Especialidad: ", $especialidad , "<br> Fecha de nacimiento : " , $nacimiento;

	}

 ?>

</body>
</html>