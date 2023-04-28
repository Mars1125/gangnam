<?php
include '../php/conexion.php';
session_start();
if (isset($_SESSION['carrito'])) {

} else {
    if (isset($_GET['idProducto'])) {
        $nombre = "";
        $precio = "";
        $imagen = "";
        $res = $conexion->query('select * from producto where id=' . $_GET['idProducto']);
        $fila = mysqli_fetch_row($res);
        $nombre = $fila['1'];
        $precio = $fila['2'];
        $imagen = $fila['3'];
        $arreglo[] = array(
            'Id' => $_GET['idProducto'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1


        );
        $_SESSION['carrito'] = $arreglo;
    }
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
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/carrito.css">
    <script src="../js/scrollreveal.js"></script>
    <title>Gangnam</title>
</head>

<body>
    <header>
        <?php
        require_once('../templates/nav.php');
        ?>
    </header>
    <div class="container mt-5 pt-5">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['carrito'])) {
                    $arregloCarrito[] = $_SESSION['carrito'];
                    for ($i = 0; $i < count($arregloCarrito); $i++) {


                        ?>
                        <tr>
                            <th scope="row">
                                <img src="../src/productos/<?php $arregloCarrito[$i]['Imagen']?>.jpg" class=" img-fluid" alt="...">
                            </th>
                            <td>Mark</td>
                            <td>
                                <input type="text" value="<?php $arregloCarrito[$i]['Cantidad']; ?>">
                            </td>
                            <td>@mdo</td>
                        </tr>
                    <?php }
                } ?>
            </tbody>
        </table>
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