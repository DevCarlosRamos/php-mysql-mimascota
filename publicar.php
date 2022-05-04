<script src="js/post.js? rev= <?php echo time(); ?> "> </script>
<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi mascota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/publicar.css">

</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="row mb-5 mt-5 text-center">
          <h1 class="h1">Publicar</h1>
        </div>
        <div class="formulario">
          <form>


            <div class="row mb-3">
              <label for="titulo" class="col-sm-2 col-form-label">Título</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txt_titulo">
              </div>
            </div>

            <div class="row mb-3">
              <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                <textarea class="form-control" placeholder="Leave a comment here" id="txt_descripcion"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="region" class="col-sm-2 col-form-label">Región</label>
              <div class="col-sm-10">
                <select class="form-select" id="select_region">
                  <option value="Amazonas">Amazonas</option>
                  <option selected value="Lambayeque">Lambayeque</option>
                  <option value="Ancash">Ancash</option>
                  <option value="Lima">Lima</option>
                  <option value="Arequipa">Arequipa</option>
                  <option value="Loreto">Loreto</option>
                  <option value="Ayacucho">Ayacucho</option>
                  <option value="MadreDios">Madre de Dios</option>
                  <option value="Apurimac">Apurimac</option>
                  <option value="Moquegua">Moquegua</option>
                  <option value="Cajamarca">Cajamarca</option>
                  <option value="Pasco">Pasco</option>
                  <option value="Cusco">Cusco</option>
                  <option value="Piura"> Piura</option>
                  <option value="Huancavelica">Huancavelica</option>
                  <option value="Puno">Puno</option>
                  <option value="Huanuco">Huánuco</option>
                  <option value="Arequipa">Arequipa</option>
                  <option value="SanMartin">San Martin</option>
                  <option value="Ica">Ica</option>
                  <option value="Junin">Junín</option>
                  <option value="Tumbes">Tumbes</option>
                  <option value="LaLibertad">La Libertad</option>
                  <option value="Ucayali">Ucayali</option>
                </select>
              </div>
            </div>

            <div class="row mb-5">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" id="txt_foto">
              </div>
            </div>

            <div class="row justify-content-center text-center">
              <div class="col-4">
                <button type="button" class="btn boton" onclick="Registrar_Datos()">Publicar</button>
                <img src="" alt="" width="">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="utilitarios/sweetalert.js"></script>


</body>

</html>