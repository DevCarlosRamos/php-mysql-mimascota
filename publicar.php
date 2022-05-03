<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/publicar_estilos.css">
</head>
<body>
    <nav class="navbar navbar-expand menu">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <a class="navbar-brand" href="#">Mi Mascota</a>
            </div>
            <div class="col-6">
              <div class="navbar-nav">
                <a class="nav-link" href="index.html">Inicio</a>
                <a class="nav-link activo" href="#">Publicar</a>
                <a class="nav-link" href="donar.html">Donar</a>
              </div>
           </div>
          </div>
        </div>
    </nav>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="row mb-5 mt-5 text-center">
              <h1 class="h1">Publicar post</h1>
            </div>
            <div class="formulario">
               <form>
                  <div class="row mb-3">
                      <label for="titulo" class="col-sm-2 col-form-label">Título</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="titulo">
                       </div>
                  </div>
                  <div class="row mb-3">
                      <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" placeholder="Leave a comment here" id="descripcion"></textarea>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="region" class="col-sm-2 col-form-label">Región</label>
                      <div class="col-sm-10">
                          <select class="form-select">
                              <option selected>Seleccione región</option>
                              <option value="lambayeque">Lambayeque</option>
                              <option value="lima">Lima</option>
                              <option value="Arequipa">Arequipa</option>
                            </select>
                      </div>
                  </div>
                  <div class="row mb-5">
                      <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                      <div class="col-sm-10">
                          <input type="file" class="form-control" id="foto">
                       </div>
                  </div>
                  <div class="row justify-content-center text-center">
                    <div class="col-4">
                      <button type="button" class="btn boton">Publicar</button>
                      <img src="" alt="" width="">
                    </div>
                  </div>
                </form>
              </div>
            </div>
         </div>
       </div>
</body>
</html>