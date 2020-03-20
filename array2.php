<form action="array2.php" metod="post">
	fecha:
	<imput type="text value ="<?php echo date("m-d-y"); ?> disable>
	<imput type="text" name=info[fecha] value="<?php echo date("y-m-d");?>" hidden>
		<br>
		concepto:
		<input type="text" value="info[concepto]" required>
		<br>
		cantidad:
		<input type="text" value="info[cantidad]" required>
		<br>
		saldo:
		<input type="text" value="info[saldo]" required>
		<input type="submit" value="enviar">
</form>
 <?php
//comprobar si la variable tipo vector info es creada para enviar el formulario 
 if (isset($_post['info'])) {
 	$array=$_post['info'];
 	$fecha=$array["fecha"];
 	$concepto=$array["concepto"];
 	$cantidad=$array["cantidad"];
 	$saldo=$array["saldo"];
 	echo "los valores obtenidos en el formulario con array son: <br>
 	fecha:".$fecha. "<br>concepto:".$concepto."<br>cantidad:".$cantidad. "<br>saldo:".
 	$saldo."";
 	 }
 ?>