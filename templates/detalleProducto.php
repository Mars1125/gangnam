<?php
include('../php/conexion.php');
if (isset($_GET['idProducto'])) {
    $resultado = $conexion->query("select * from producto where idProducto=" . $_GET['idProducto']) or die($conexion->error);
    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_row($resultado);
    } else {
        header("Location:../index.php");
    }
} else {
    header("Location:../index.php");
}
?>
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
    <link rel="stylesheet" href="../styles/catalogo.css">


    <title>Gangnam</title>
</head>

<body>
    <header>
        <?php
        require_once('../templates/nav.php');
        ?>
    </header>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-7">
                <img src="../src/productos/<?php echo $fila[9]; ?>.jpg"" class=" img-fluid" alt="...">
            </div>
            <div class="col-5">
                <span>
                    <?php echo $fila[1]; ?>
                </span>
                <p>
                    <?php echo $fila[3]; ?>
                </p>
                <p>
                    <?php echo $fila[6]; ?>
                </p>
                <a href="./carrito.php?=<?php echo $fila[0]; ?>"
                    class="btn btn-agregar-producto col-12 rounded-1">Agregar al carrito</a>
                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
        <?php
        require_once('./footer.php');
        ?>

        <script src="https://kit.fontawesome.com/c7b1d2a865.js" crossorigin="anonymous"></script>
        <script src="../js/nav.js"></script>
        <script src="../js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>
</body>

</html>