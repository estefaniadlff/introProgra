 <!DOCTYPE html>
 <html>
 <head>
 	<title>Segunda ventana</title>
 </head>
 <body>

 	 <h1>tus valores se muestran aqui </h1>


 	  <?php
 	  $opcion2=$_POST['opcion'];
 	  $valor2=$_POST['valor'];

        if ($opcion2=='cuadrado') {
        	$cuboo=$valor2*$valor2;

        	echo "El cuadrado del numero seleccionado es:  $cuboo";
        }

        if ($opcion2=='cubo') {
           $cubo2=$valor2*$valor2*$valor2;

           echo "El cubo del numero seleccionado es :  $cubo2";
        	
        }


        if ($opcion2=='fibonacci') {
           $n1=1;
           $n2=0;
           for ($i=0; $i <$valor2 ; $i++) { 
           	$suma=$n1+$n2;
           	$n1=$n2;
           	$n2=$suma;

           	echo $suma.",";
           }

        }

 	   ?>	
 
 </body>
 </html>