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
  require("conexion.php");
try{
  $con=new Conexion();
  $conexion=$con->conectar();
  $statement = $conexion->prepare('INSERT INTO maestros VALUES(:nombre, :no_empleado, :correo, :carrera, :especialidad, :nacimiento)');
    $statement->execute(array(
      ':nombre' => $nombre,
      ':no_empleado' => $no_empleado,
      ':correo' => $correo,
      ':carrera' => $carrera,
      ':especialidad' => $especialidad,
      'nacimiento' => $nacimiento
    ));
	
}catch(PDOException $e){
  echo "ERROR: " . $e->getMessage();
  }
}
 ?>
}
}
}
}

</body>
</html>