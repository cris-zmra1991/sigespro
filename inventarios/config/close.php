<?php
require '../base.php';
$database->update("users",["status" => "0"],["user_name" => $_SESSION['usuario']]);
session_destroy();
header('Location: '.RUTA.'index.php');

 ?>
