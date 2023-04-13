<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;


$conexion=mysqli_connect("localhost","root","","carrito");
$consulta="SELECT*FROM cliente where correo='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){
    header("location:../templates/productos.php");
}else
if($filas['id_rol']==2){
    header("location:../templates/index.php");

}


else{
    ?>
    <?php
    include("../index.php");
    ?>
    <h1>ERROR</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);