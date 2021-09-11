<?php include_once '../templates/header.php';?>
  <body>
    <strong>Registro de contratos</strong> (Modo de consulta)<br><br>
    <table class="ui striped table">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Descripción del producto</th>
          <th scope="col">Unidad de medida</th>
          <th scope="col">Existencias</th>
          <th scope="col">Almacen</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = $database->query("SELECT v.codigo, p.Desc_Producto, p.UM_Almacen, e.Existencia_Actual, e.Id_Almacen FROM volatiles v INNER JOIN Producto p ON p.Id_Producto = v.codigo INNER JOIN Existencia e ON e.Id_Producto = v.codigo");

        foreach($data as $solicitudes){ ?>
          <tr>
            <td><?php echo $solicitudes["codigo"] ?></td>
            <td><?php echo $solicitudes["Desc_Producto"] ?></td>
            <td><?php echo $solicitudes["UM_Almacen"] ?></td>
            <td><?php if($solicitudes["Existencia_Actual"] > 0){echo $solicitudes["Existencia_Actual"];} else {echo "0";} ?></td>
            <td><?php echo $solicitudes["Id_Almacen"] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
