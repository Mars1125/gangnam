<?php
include_once "funciones.php";
if (!isset($_POST["id_curso"])) {
    exit("No hay id_curso");
}
agregarProductoAlCarrito($_POST["id_curso"]);
header("Location: detalleCurso.php?IDCurso=" . $_POST["id_curso"]);
?>