<?php 
class Conexion{
	
	public function conectar(){
		$cnx=null;
		$conn=null;
		try{
    		
    		                  //Tipo de conexion,  nombre base de datos, usuario, contraseña
    		$conn = new PDO('mysql:host=localhost;dbname=universidad', 'root', 'root');
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		}catch(PDOException $e){
    		echo "ERROR: " . $e->getMessage();
    		echo "Conexion no establecida";
  		}
		
		return $conn;
	}

	public function cerrar(){
		$cnx = null;
		return $cnx;
	}
}
?>