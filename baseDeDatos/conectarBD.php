<?php

define('DB_NAME', 'ecommerce_tfg');    // Nombre base de datos
define('DB_USER', 'al375866');              // Usuario base de datos
define('DB_PASSWORD', '20912335E');           // Constraseña base de datos
define('DB_HOST', "db-aules.uji.es");       // Hostname base de datos
define('DB_CHARSET', 'utf8');               // Charset base de datos
define('DB_COLLATE', '');

if (!isset($pdo)){
  try{
   $pdo = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
  }
  catch (PDOException $e) {
		//echo "Failed to get DB handle: " . $e->getMessage() . "\n";
		$pdo = new PDO('sqlite::memory:',null,null,array(PDO::ATTR_PERSISTENT => true));

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    include_once("sqlite_test.php");
  }
}						  

?>