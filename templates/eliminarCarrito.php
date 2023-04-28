<?php
include_once "funciones.php";


if (!isset($_POST["id_curso"])) {
    exit("No hay id_curso");
}
quitarProductoDelCarrito($_POST["id_curso"]);
# Saber si redireccionamos a tienda o al carrito, esto es porque
# llamamos a este archivo desde la tienda y desde el carrito
if (isset($_POST["redireccionar_carrito"])) {
    header("Location: verCarrito.php");
} else {
    header("Location: detalleCurso.php?IDCurso=" . $_POST["id_curso"]);
}