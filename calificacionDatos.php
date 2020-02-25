<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calificaciones</title>
	
</head>
<body>
	<?php
		$nombre=$_POST['nombre'];
		$calificacion=$_POST['cali'];
		$nombre1=$_POST['nombre1'];
		$calificacion1=$_POST['cali1'];
		$nombre2=$_POST['nombre2'];
		$calificacion2=$_POST['cali2'];
		$nombre3=$_POST['nombre3'];
		$calificacion3=$_POST['cali3'];
		$nombre4=$_POST['nombre4'];
		$calificacion4=$_POST['cali4'];

		echo $nombre . "<br>". "Su calificacion es : " . $calificacion;
		if ($calificacion>=70) {
			echo "<br> Aprobo";
		}else{
			echo "<br> No aprobo";
		}
		echo "<br>";
		echo $nombre1 . "<br>". "Su calificacion es : " . $calificacion1;
		if ($calificacion1>=70) {
			echo "<br> Aprobo";
		}else{
			echo "<br> No aprobo";
		}
		echo "<br>";
		echo $nombre2 . "<br>". "Su calificacion es : " . $calificacion2;
		if ($calificacion2>=70) {
			echo "<br> Aprobo";
		}else{
			echo "<br> No aprobo";
		}
		echo "<br>";
		echo $nombre3 . "<br>". "Su calificacion es : " . $calificacion3;
		if ($calificacion3>=70) {
			echo "<br> Aprobo";
		}else{
			echo "<br> No aprobo";
		}
		echo "<br>";
		echo $nombre4 . "<br>". "Su calificacion es : " . $calificacion4;
		if ($calificacion4>=70) {
			echo "<br> Aprobo";
		}else{
			echo "<br> No aprobo";
		}
		echo "<br>";
	?>
	<br>
	<a href="calificacion.php" title="Regresar">Regresar</a>
</body>
</html>