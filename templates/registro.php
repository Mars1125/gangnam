<?php

   $nombre = $_POST['nombre'];
   $apellidoPaterno = $_POST['apellidoPaterno'];
   $apellidoMaterno = $_POST['apellidoMaterno'];
   $password = $_POST['contra'];
   $email = $_POST['email'];
   if (!empty($nombre) && !empty($apellidoPaterno) && !empty($apellidoMaterno) && !empty($email) && !empty($password))
      {
     
      include_once 'bd/conexion.php';

      $objeto = new Conexion();
      $conexion = $objeto->Conectar();

      //recepción de datos enviados mediante POST desde registro.html

      $consulta = "INSERT INTO usuarios (Nombre, ApellidoPaterno, ApellidoMaterno, Email, Contra, IDRol)
      values ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$email', '$password', '2')";
      $resultado = $conexion->prepare($consulta);
      $resultado->execute();


      echo "El registro fue hecho correctamente, por favor ";
      echo "<a href=\"login.php\"> Inicia Sesión</a>";
      }else{
         echo "Ingresa todos los datos por favor, <a href=\"registro.html\"> intentar de nuevo</a><br>";
         echo "Volver a la <a href=\"index.html\"> Pagina Principal</a>";
         }


?>