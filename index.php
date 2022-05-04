  <?php include("header.php") ?>
  <?php include("conexion.php"); ?>

  <?php
  $objCone = new conexion;
  $objCone->conexionPDO();
  $resultado = $objCone->consultar("SELECT * FROM mimascotabd.post;");
  ?>

  <div class="navbar buscador">
    <form class="formBuscador">
      <input type="text" class="form-control">
      <button type="submit" class="boton">Buscar</button>
    </form>
  </div>

  <div class="contenedor">

    <!-- Carta +14 -->
    <?php foreach ($resultado as $post) { ?>
      <div class="carta">

        <div class="contenedor-fecha">
          <p class="fecha">Publicado el <?php echo $post['fecha']; ?></p>
        </div>

        <div class="container">
          <img class="imagenes" src="img/callejero.jpg ?>" alt="mascota" />
        </div>

        <div class="container">
          <h6 class="titulo"> <b><?php echo $post['titulo']; ?></b> </h6>
        </div>

        <div class="container">
          <p class="descripcion">
            <?php echo $post['descripcion']; ?>
          </p>
        </div>

        <div class="contenedor-lugar">
          <p class="lugar"> Soy de <?php echo " " . $post['lugar']; ?> </p>
        </div>
        <button type="button" class="boton">Ver</button>
      </div>
    <?php   }      ?>
  </div>
  </body>

  </html>