<?php
$carros =array(
  array("Volvo",22,18),
  array("BMW",123,53),
  array("Chevrolet",5,2),
  array("Ford",12,50),
);

echo $carros [0][0].":en stock: ".$carros[0][1].",vendidos:".$carros[0][2]."<br>";
echo $carros [1][0].":en stock: ".$carros[1][1].",vendidos:".$carros[1][2]."<br>";
echo $carros [2][0].":en stock: ".$carros[2][1].",vendidos:".$carros[2][2]."<br>";
echo $carros [3][0].":en stock: ".$carros[3][1].",vendidos:".$carros[3][2]."<br>";

?>
<?php
// imprimir matriz utilizando for
$alumnos =array(
 array ("de la fuente", 20, 5),
 array ("pozos",19,10), 
 array ("castillo",21,9),
 array ("rodriguez",23,5),
);

//imprimir en lista desordendada 
for($row = 0; $row < 4; $row++)
{
   echo "<p><b> no. renglon $row </b></p>" ;
   echo "<ul<";
   for ($col = 0; $col <3;  $col ++) 
   	{
   		echo "<li>".$alumnos[$row][$col]."</li>";
   	}
   	echo "</ul>";
}
?>