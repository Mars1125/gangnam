<?php
$server="localhost";
$user="root";
$pass="";
$database="carrito";
$conexion =
mysqli_connect($server,$user,$pass,$database);
if(!$conexion){
    die("Conexion fallida");
}
?>