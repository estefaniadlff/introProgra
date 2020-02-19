
<?php  

//mostramos la conexion para realizar la actualizacion 
//usaremos PDO para conectar PHP con MySQL

/*$CONNECT= new PDO ("mysql:host=localhost;dbname=php_conusltapdo",
"root","");
//DB CREDENCIALES DE USUARIO.;*/


DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_PASS','root');
DEFINE('DB_NAME','form-bd2');


try
{
//Ejecutamos las variables y aplicaciones UTF8
$connect=new PDO("mysql:host".DB_HOST. ";dbname=".DB_NAME,DB_USER,
DB_PASS,
array(PDO: :MYSQL_ATTR_INIT_COMMAND => "SET NAME 'utf8'"));
}
	catch(PDOException $e)
{
	exit("Error:" . $e->getMessage());
}

?>


