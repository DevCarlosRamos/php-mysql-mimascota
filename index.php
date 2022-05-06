  <?php include("header.php") ?>
  <?php include("conexion.php"); ?>

  <?php
  $objCone = new conexion;
  $objCone->conexionPDO();
  $resultado = $objCone->consultar("SELECT * FROM post;");
  ?>

  <div class="buscador">
    <form class="formBuscador">
      <input type="text" class="form-control">
      <button type="submit" class="boton--inicio">Buscar</button>
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
          <img class="imagenes" src="<?php echo $post['imguno']; ?>" alt="mascota" />
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
        <button type="button" class="boton--inicio" onclick="mostrarDetalles('<?php echo $post['id'] ?>')">Ver</button>
      </div>
    <?php   } ?>

    <div id="divModal"></div>
    <script>
      function mostrarDetalles(id) {
        var ruta = 'modal.php?id=' + id;
        $.get(ruta, function(data) {
          $('#divModal').html(data);
          $('#exampleModal').modal('show');
        });
      }
    </script>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>

  </html>