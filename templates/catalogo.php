<?php

    include '../php/conexion.php';
   // $conexion=mysqli_connect('localhost','id18960420_cibersegdb','QkrWkFCgvcw?$)#1','id18960420_ciberseg');
      $conexion=mysqli_connect('localhost','root','','ciberseg');

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



    <div class="registro container mt-5 pt-5 mb-5 ">
        <p class="text-center subtitulo">Productos</p>
        <div class="row justify-content-center ">
        <?php 
    		$sql="SELECT * from cursos WHERE Estado='Nuevo'";
    		$result=mysqli_query($conexion,$sql);
    		foreach ($result as $row) {?>
            <?php
            include('../php/conexion.php');
            $resultado = $conexion->query("select * from producto");
            while ($fila = mysqli_fetch_array($resultado)) { ?>


                <div class="card item-producto mt-4" style="width: 15rem" id="item-producto">

                    <img src="../src/productos/<?php echo $fila["imagen"]; ?>.jpg" alt=""
                        class="card-img-top rounded-top" />
                    <div class="card-body text-center">
                            <p class="card-text card-nombre">
                                <?php echo $fila["nombre"]; ?>
                            </p>
                        </a>
                        <p class="card-text card-descripcion">
                            <?php echo $fila["marca"]; ?>
                        </p>
                        <p class="card-text card-precio">$
                            <?php echo $fila["precio"]; ?>
                        </p>
                    </div>
                    <a href="./detalleProducto.php?idProducto=<?php echo $fila['idProducto']; ?>" class="btn btn-agregar-producto col-12 rounded-1">Ver Producto</a>

                </div>

            <?php } ?>
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