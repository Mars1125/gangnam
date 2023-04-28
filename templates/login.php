<?php
    include_once 'bd/conexion.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
           case 1:
                header('location: admin/index.php');
           break;
    
            case 2:
                header('location: index.php');
            break;
    
            default:
        }
    }

    //Comprueba la sesion de usuario
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = new Conexion();
        $query = $db->Conectar()->prepare('SELECT * FROM usuarios WHERE Email = :email AND Contra = :password');
        $query->execute(['email' => $email, 'password' => $password]);


        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[6];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin/index.php');
                break;

                case 2:
                header('location: index.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o la contraseña son incorrectos.";
        }
        

    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicia Sesión</title> 
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosLR.css">
    

</head>  
    <body style="background: linear-gradient(to right, white, #8D6EFF);">

    <form id="formLogin" action="" method="POST" class="formulario">
    <img src="src/logoo.png" alt="logo" width="200px" height="32px">
    <br><br>
    <h1>Inicia Sesión</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="email" id="email" placeholder="Correo Electronico">
         
         </div>
         
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name="password" id="password" placeholder="Contraseña">
        </div>
        
         
        </div>
        <input type="submit" value="Login" class="button">
        
        <div class="pt-3"><p><small>¿No tienes una cuenta? <a class="link" href="registroVista.php">Registrate</a></small></p></div>
        
        <a class="link px-3" href="index.php">Volver</a>

     </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>

</body>
</html>