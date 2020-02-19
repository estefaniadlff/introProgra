<!DOCTYPE html>
<html>
<head>
	<title>Imagen</title>
</head>
<body>
	<?php 
	$dado1=rand(1, 6);
	$dado2=rand(1, 6);




print"<p>\n";
print "<img src=\"img/$dado1.png\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print "<img src=\"img/$dado2.png\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print"<\p>\n";
print "\n";

if ($dado1==$dado2){
print "<p> ha sacado una pareja de $dado1.</p>\n";
}else {
	print "<p> No ha sacado una pareja.El valor mas alto es" . max($dado1,$dado2).".</p>\n";
}
	 ?>

</body>
</html>