<?php include('BDconect.php');?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Actualizar varias filas con CheckBox en PHP usando Ajax | BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);

});
</script>
</head>

<body>
	
<h1></h1>

<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="thead-dark">
    <th width="18%">Nombres</th>
    <th width="22%">Apellidos</th>
    <th width="22%">Profesión</th>
    <th width="14%">Estado</th>
    <th width="13%">Fecha registro</th>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM tbl_personal"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> nombres."</td>
<td>".$result -> apellidos."</td>
<td>".$result -> profesion."</td>
<td>".$result -> estado."</td>
<td>".$result -> fregis."</td>
</tr>";

   }
 }
?>
</tbody>
</table>
</div>
</form>
   </div>  
  </div>
 

      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->


<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>