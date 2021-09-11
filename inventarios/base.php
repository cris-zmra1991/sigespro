<?php
define('RUTA', 'http://localhost:8030/sigespro/inventarios/');
require 'config/session_handler.php';
require 'config/medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mssql',
  	'host' => 'aquiles',
  	'database' => 'AlmacenesCI',
    'username' => 'almacenesci',
  	'password' => 'almacenesci'
   ]);
} catch (PDOException $e) {
  echo "No se pudo conectar a la Base de Datos";
}
?>
