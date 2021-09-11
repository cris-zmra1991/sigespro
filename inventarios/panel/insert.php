<?php
require '../base.php';
if (isset($_SESSION['usuario'])) {
  $data = $database->count("user_has_permissions",["AND" => ["id_user" => $_SESSION['id_user'], "id_perm" => 2]]);
  if (!empty($data)) {
    //REQUERIR VISTA
    require '../views/insert.view.php';
    //INSERCION DE NUEVO PRODUCTO VOLATIL
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $codigo = $_POST['codigonuevo'];
      //BUSCAR SI EXISTE EL PRODUCTO EN LA BD
      $count = $database->count("volatiles",["codigo" => $codigo]);
      //SI NO EXISTE INSERTARLO
      if (empty($count)) {
        $database->insert("volatiles",["codigo" => $codigo]);
        $resultado = "El producto se ha insertado correctamente";
      }
      else{
        $resultado = "El producto ya se encuentra registrdo";
      }
    }
    }
  else {
  //SI FALLA LA VALIDACION DE PERMISOS MUESTRA PAGINA DE ERROR
  require 'e125.php';
  }
}
?>
