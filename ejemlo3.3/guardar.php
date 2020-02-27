<?php include('BDconect.php');?>

<!DOCTYPE html>
<html>
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


<div class="container">

<?php
if (isset($_POST['insertar'])) {

  $nombres=$_POST['nombres'];
  $apellidos=$_POST['apellidos'];
  $profesion=$_POST['profesion'];
  $estado=$_POST['estado'];
  $fregis=date('Y-m-d');


  $sql="insert into tbl_personal(nombres,apellidos,profesion,estado,fregis)
  values(:nombres,:apellidos,:profesion,:estado,:fregis)";

  $sql= $connect -> prepare($sql);

  $sql->bindParam(':nombres',$nombres,PDO::PARAM_STR, 25);
  $sql->bindParam(':apellidos',$apellidos,PDO::PARAM_STR, 25);
   $sql->bindParam(':profesion',$profesion,PDO::PARAM_STR, 25);
    $sql->bindParam(':estado',$estado,PDO::PARAM_STR, 25);
     $sql->bindParam(':fregis',$fregis,PDO::PARAM_STR);


     $sql->execute();

     $lastInsertId=$connect->lastInsertId();
     if ($lastInsertId>0) {
       echo "<div class='content alert alert-primary'> Gracias.. Tun nombre es :$nombres </div>";
     }
   
}


  ?>

  <h3 class="mt-5">Insertar información PDO PHP y MySQL</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres</label>
      <input name="nombres" type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Apellidos</label>
      <input name="apellidos" type="text" class="form-control" id="edad" placeholder="Apellidos">
    </div>
  </div>
<div class="form-row">  
    <div class="form-group col-md-6">
      <label for="profesion">Profesión</label>
      <input name="profesion" type="text" class="form-control" id="profesion" placeholder="Profesion">
    </div>

  <div class="form-group col-md-6">
    <label for="Estado">Estado</label>
    <select required name="estado" class="form-control" id="Estado">
    <option value=""><< >></option>
    <option value="Colombia">Colombia</option>
    <option value="Argentina">Argentina</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Peru">Peru</option>
    <option value="Brasil">Brasil</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Chile">Chile</option>
    </select>
  </div>

</div>
<div class="form-group">
  <button name="insertar" type="submit" class="btn btn-primary  btn-block">Guardar</button>
</div>
</form>
    </div>  
    <div class="col-12 col-md-12"> 

 </div>
  </body>
   </html>      
