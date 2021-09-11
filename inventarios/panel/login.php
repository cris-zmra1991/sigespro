<?php
require '../base.php';
$errores = "";
$comp = $database->select("config","*");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    //$password = hash('sha512', $password);
    $company = $_POST['company'];
    //Verificar que el usuario sea unico
    $count = $database->count("users",["user_name" => $usuario]);
    if ($count == 1) {
      //buscar usuario en BD
      $database->select("users","*",["user_name" => $usuario], function ($data) {
        $_SESSION['id_user'] = $data["id"];
        $_SESSION['usuario'] = $data["user_name"];
        $_SESSION['fullname'] = $data["user_full_name"];
        $_SESSION['password'] = $data["password"];
      });
      $_SESSION['company'] = $company;
      //Comprobar que la contraseña sea correcta
      if ($password == $_SESSION['password']) {
      $database->update("users",["status" => "1"],["user_name" => $usuario]);
      header('Location: '.RUTA.'index.php');
      }
      else {
        $errores = '<p>Error, revise los datos</p>';
      }
    }
    else {
      $errores = '<p>Nombre de usuario duplicado<br>Consulte al administrador</p>'.$count;
    }
    }

require_once '../views/login.view.php';
 ?>
