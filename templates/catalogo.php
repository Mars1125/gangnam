<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/catalogo.css">
    <title>Gangnam</title>
</head>

<body>
    <header>
        <?php
        require_once('./nav.php');
        ?>
    </header>

    <div class="container mt-5 pt-5 mb-5">
        <p class="text-center subtitulo pb-4">Productos</p>
        <div class="row justify-content-center ">

            <div class="card" style="width: 15rem">
                <img src="../src/prod1.jpg" alt="" class="card-img-top rounded-top" />
                <div class="card-body text-center">
                    <p class="card-text card-nombre">Labial Dear</p>
                    <p class="card-text card-descripcion">
                        Hydrate & Soften Lines
                    </p>
                    <p class="card-text card-precio">$200</p>
                </div>
                <a href="#" class="btn btn-agregar-producto col-12 rounded-1">Agregar al carrito</a>
            </div>
        </div>
    </div>

    <?php
    require_once('./footer.php');
    ?>

    <script src="https://kit.fontawesome.com/c7b1d2a865.js" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>