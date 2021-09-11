<?php
require '../base.php';
if (isset($_SESSION['usuario'])) {
  $data = $database->count("user_has_permissions",["AND" => ["id_user" => $_SESSION['id_user'], "id_perm" => 1]]);
  if (!empty($data)) {
    require '../views/listado.view.php';
    }
  else {
  require 'e125.php';
  }
}
 ?>
