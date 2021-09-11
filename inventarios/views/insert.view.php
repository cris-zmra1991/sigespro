<?php include_once '../templates/header.php';?>
  <body>
    <strong>Insertar nuevo producto</strong> (Registro de productos volátiles)<br><br>

    <div class="ui placeholder segment fullh">
      <div class="ui two column stackable center aligned grid fullh">
        <div class="ui vertical divider">==></div>
          <div class="column">
            <div class="small-container">
            Escriba el código del producto:<br><br>
            <form class="ui large form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
              <div class="ui fluid left icon input">
                <input placeholder="Código del producto" name="codigonuevo">
                <i class="industry icon"></i>
              </div>
              <br>
              <div class="ui buttons"><button class="ui mini orange button" type="submit">Ver Información</button><div class="or" data-text="o"></div><button class="ui mini green button" type="submit">Registrar</button></div>
            </div>

            </form>
          </div>
          <div class="column">

          </div>
        </div>
      </div>
    </div>

  </body>
</html>
