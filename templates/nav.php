<nav class="navbar navbar-expand-lg sticky" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand d-sm-justify-content-center" href="../index.php"><img class="logo" src="./brand.png"
        alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="templates/catalogo.php">CATALOGO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">SKIN CARE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">MAQUILLAGE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="templates/acercade.php">ACERCA DE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="templates/identidad.php">IDENTIDAD</a>
        </li>

      </ul>
      <div class="row d-md-flex d-sm-flex  me-2" role="search">
        <div class="col-lg-8 col-md-6 d-sm-block col-sm-12">
          <input class="form-control input-buscar input" type="search" placeholder="Search" aria-label="Search">
        </div>
        <!--<div class="col-auto">
          <a class=" btn "><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
        </div>-->

        <div class="col-lg-2 col-md-2 col-sm-4 d-sm-flex  p-0">
          <li class="nav-item dropdown lista-nav-li p-1 col-lg-2 col-md-2 col-sm-4">
            <a class="nav-link dropdown-toggle lista-nav-li btn p-1" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"> <i class="fa-regular fa-user fa-lg"></i>
            </a>

            <ul class="dropdown-menu lista-nav-li" aria-labelledby="btn-sesion">
              <li><a href="./templates/sesion.php" class="dropdown-item btn px-2">Iniciar Sesion</a></li>
              <li><a href="./templates/registrarse.php" class="dropdown-item btn px-2">Registrarse</a></li>
              <li><a href="php/logout.php" class="dropdown-item btn px-2">Cerrar sesión</a></li>
            </ul>
          </li>

        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 d-sm-flex  p-0">
          <a class="btn position-relative p-2" type="submit" href="./templates/carrito.php"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
              class="fa-solid fa-cart-shopping fa-lg"></i><span
              class="position-absolute top-2 start-800 translate-middle p-1 bg-danger rounded-circle">
            </span></a>
        </div>
      </div>
    </div>
  </div>
</nav>