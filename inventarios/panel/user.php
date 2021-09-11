<?php
require '../base.php';
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $data = $database->count("users",["user_name" => $usuario]);
  if (!empty($data)) {
    require '../views/user.view.php';
    }
  else{
    header('Location: '.RUTA.'login/login.php');
  }
}
else {
  header('Location: '.RUTA.'login/login.php');
}
?>
