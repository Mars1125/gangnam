<?php
$server="localhost";
$user="root";
$pass="";
$database="gangnam";
$conexion =
mysqli_connect($server,$user,$pass,$database);
if(!$conexion){
    die("Conexion fallida");
}
?>