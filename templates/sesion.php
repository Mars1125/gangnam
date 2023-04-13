<?php
include "../php/conexion.php";
error_reporting(0);
session_start();

if (isset($_SESSION["correo"])) {
    header("location:../templates/productos.php");
}
if (isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $apPaterno = $_POST["apPaterno"];
    $apMaterno = $_POST["apMaterno"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $telefono = $_POST["telefono"];

    if ($contraseña == $contraseña) {
        $sql = "SELECT * FROM cliente where correo='$correo'";
        $result = mysqli_query($conexion, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO carrito(nombre,apPaterno,apMaterno,fechaNacimiento,correo,contraseña,telefono)";
            $result = mysqli_query($conexion, $sql);
            if ($result) {
                echo "<script>alert('Usuario Registrado')</script>";
                $nombre = "";
                $apPaterno = "";
                $apMaterno = "";
                $fechaNacimiento = "";
                $correo = "";
                $contraseña = "";
                $telefono = "";
                $_POST["nombre"]="";
                $_POST["apPaterno"]="";
                $_POST["apMaterno"]="";
                $_POST["fechaNacimiento"]="";
                $_POST["correo"]="";
                $_POST["contraseña"]="";
                $_POST["telefono"]="";
            }else{
                echo "<script>alert('Hubo un error')</script>";
            }
        }else{
            echo "<script>alert('el correo ya existe')</script>";
        }
    }else{
        echo "<script>alert('las contraseñas no coinciden')</script>";
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
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/registroYsesion.css">
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
        <p class="text-center subtitulo pt-5 mt-5 pb-4">Iniciar Sesion</p>
        <div class="d-flex container justify-content-md-center mt-3 mb-5 px-4 ">
            <div class="row px-5 contenedor-formulario pb-5">
                <div class="row g-3 ">
                    <p class="text-formulario">Por favor complete la siguiente informacion:</p>


                    <form action="../php/validar.php" method="post">
                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
                                aria-label="First name" placeholder="Correo electronico" name="correo">
                        </div>
                        <div class="col-md-12 col-sm-12 mt-3">
                            <input type="text" class="form-control input-formulario rounded-0 border border-secondary"
                                aria-label="Last name" placeholder="Contraseña" name="contraseña">
                        </div>
                        <div class=" col-md-12 col-sm-12 mt-2 mb-3">
                            <a href="" class="text-formulario-a ">¿Olvido su contraseña?</a>
                        </div>

                        <div class="col-md-12 col-sm-12 m-0 p-1">
                            <button type="submit" class="btn boton-registro px-4 rounded-0 m-0">Iniciar Sesion</button>
                        </div>
                    </form>
                    <div class=" col-md-12 col-sm-12 mt-3 mb-3 p-1">
                        <p class="text-formulario">¿Aun no tiene una cuenta? <a href="./registrarse.php"
                                class="text-formulario-a">Crear Cuenta</a></p>
                    </div>

                </div>

            </div>
            <div class="container row d-none d-sm-block contenedor-sesion p-5">
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