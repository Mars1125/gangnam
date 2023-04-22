<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/identidad.css">
    <script src="../js/scrollreveal.js"></script>
    <title>Gangnam</title>
</head>

<body>
    <header>
        <?php
        require_once('../templates/nav.php');
        ?>
    </header>
    <div class="registro mb-5">
        <div class="d-flex container-fluid justify-content-center mt-5 mb-5">
            <div class="row contenedor-acercade">
                <div class="col-lg-6 col-md-6 col-sm-12 contenedor-acercade px-5 pt-5">
                    <p class="px-4 pt-4 text-title-identidad">Historia</p>
                    <p class="p-4 text-identidad pb-5">Había dos estudiantes universitarios llamados Marina y Daniel que
                        se conocieron en la universidad
                        mientras estudiaban Informática. A ambos les apasionaba el emprendimiento y siempre estaban
                        hablando de ideas de negocio y oportunidades.
                        Un día, mientras estudiaban juntos en la biblioteca, se dieron cuenta de que había una necesidad
                        en el mercado local de su ciudad: no había una tienda especializada en productos cosméticos
                        coreanos. A partir de esta idea, comenzaron a investigar y a desarrollar un plan de negocios.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 container-acercade-imagen">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <p class="text-center text-title-identidad mb-5 ">Fundacion de la empresa</p>
                <div class="col text-acercade">
                    <p class="">Fecha</p>
                    <p>1 Marzo de 2023</p>
                </div>
                <div class="col text-acercade">
                    <p>Fundadores</p>
                    <p>Sanchez Campos M.M.<br> Villanueva Juárez B.D.</p>
                </div>
                <div class="col text-acercade">
                    <p>Ubicacion</p>
                    <p>Cuautitlan izcalli, México, México.</p>
                </div>

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