<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="../js/scrollreveal.js"></script>
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/registroYsesion.css">

  <title>Gangnam</title>
</head>

<body>
  <header>
    <?php
    require_once('../templates/nav.php');
    ?>
  </header>



  <div class="registro mb-5">
    <p class="text-center subtitulo pt-5 mt-5 pb-4">Registrarse</p>
    <div class="d-flex container justify-content-md-center mt-3 mb-5 px-4 ">
      <div class="row px-5 contenedor-formulario pb-5">
        <div class="row g-3 ">
          <p class="text-formulario">Por favor complete la siguiente informacion:</p>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
              aria-label="First name" placeholder="Nombres">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
              aria-label="Last name" placeholder="Apellido Paterno">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
              aria-label="First name" placeholder="Apellido Materno">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
              placeholder="Fecha de Nacimiento" aria-label="Last name">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
              aria-label="First name" placeholder="Correo">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
              placeholder="Telefono" aria-label="Last name">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="password" class="form-control input-formulario rounded-0 border border-secondary"
              aria-label=" First name" placeholder="Contraseña">
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="password" class="form-control input-formulario rounded-0 border border-secondary"
              aria-label="Last name" placeholder="Repite Contraseña">
          </div>
          <div class="form-check col-md-12 col-sm-12 mt-4">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label text-formulario-check" for="flexCheckDefault">
              Declaro haber entendido la informacion facilitada y consinto el tratamiento que se efectuara de mis datos
              de
              caracter personal en las <a class="text-formulario-a " href="">Politicas de privacidad</a>
            </label>
          </div>
          <div class="col-md-6 col-sm-12">
            <button type="button" class="btn boton-registro px-5 rounded-0">Registrarse</button>
          </div>
        </div>

      </div>
      <div class="container row d-none d-sm-block contenedor-registrarse p-5">
      </div>
    </div>
  </div>
  <?php
  require_once('../templates/footer.php');
  ?>

  <script src="https://kit.fontawesome.com/c7b1d2a865.js" crossorigin="anonymous"></script>
  <script src="../js/nav.js"></script>
  <script src="../js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>