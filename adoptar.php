<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="/css/main.css">

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- LOGO -->
  <link rel="icon" type="image" href="img/logo.png">
  <title>Mi-Mascota</title>

</head>

<body>
  <!-- HEADER -->
  <header>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Mi Mascota</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link click" aria-current="page" href="#">Inicio</a>
            <a class="nav-link" href="#">Publicar</a>
            <a class="nav-link" href="#">Donar</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- carrusel -->
  <section class="carrusel">
    <div class="container">
      <div class="mascotas">
        <div class="mascotas-left">
          <div class="img-container">
            <img src="/img/dog-3.jpg" alt="dog-1">
          </div>
          <div class="carrusel-container">
            <div>
              <img src="/img/dog-2.png" alt="dog-1">
            </div>
            <div >
              <img src="/img/dog-3.jpg" alt="dog-2">
            </div>
            <div>
              <img src="/img/dog-2.png" alt="dog-3">
            </div>
            <div>
              <img src="/img/dog-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="mascota-right">
          <h3 class="name-mascota">José Edinson Zafra Vargas</h3>
          <p class="description-mascota">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt rem ullam delectus deserunt esse adipisci omnis inventore qui placeat doloribus, perspiciatis assumenda itaque iste magni distinctio quia, debitis cupiditate deleniti?</p>
          <p class="description-mascota">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt rem ullam delectus deserunt esse adipisci omnis inventore qui placeat doloribus, perspiciatis assumenda itaque iste magni distinctio quia, debitis cupiditate deleniti?</p>
          <div class="btn-adoptar">
            <button type="button" class="btn btn-adop">ADOPTAR</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- script js -->
  <script src="/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

</body>

</html>