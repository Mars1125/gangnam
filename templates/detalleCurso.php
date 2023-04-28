<?php
    

    include 'bd/conexion.php';
    include_once 'funciones.php';

    require_once "vistas/header.php";
    
    //$conexion=mysqli_connect('localhost','id18960420_cibersegdb','QkrWkFCgvcw?$)#1','id18960420_ciberseg');
      $conexion=mysqli_connect('localhost','root','','ciberseg');
    
    $IDCurso=mysqli_escape_string($conexion,$_REQUEST['IDCurso']??'');
    $idCursito=$_GET['IDCurso'];
    $consulta="SELECT * FROM cursos WHERE IDCurso='$IDCurso';";
    $resultados=mysqli_query($conexion,$consulta);
    $rowCurso=mysqli_fetch_assoc($resultados);
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <title>
        Detalle de Curso
    </title>
</head>

<body>
    <br><br>
<!-- Default box -->
<div class="container">
<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none"><?php echo $rowCurso['NombreCurso']; echo $idCursito;?></h3>
                <div class="col-12">
                    <img height="300px" width="400px" src="Imagenes/<?php echo $rowCurso['Imagen'];?>" class="product-image" alt="Product Image">
                </div>
                
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3"><font size="6"><b><?php echo $rowCurso['NombreCurso'];?></b></font></h3>

                <p class="text-justify"><font size="4"><b>Descripción</b></font><br> <?php echo $rowCurso['Detalles'];?></p>
                <hr>
                
                
                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        <font size="4"><b>Precio</b></font>
                    </h2>
                    <h4 class="mt-0">
                        <font size="4"><b>$<?php echo $rowCurso['Precio'];?>  MXN</b></font>
                    </h4><h4><?php echo $rowCurso['Horas'];?></h4>
                            <br><font size="4"><b>Requisitos</b></font> <br> <?php echo $rowCurso['Requisitos'];?>
                </div>

                <div class="mt-4">
                    
                    <?php if (productoYaEstaEnCarrito($_GET['IDCurso'])) { ?>
                        <form action="eliminarCarrito.php" method="post">
                            <input type="hidden" name="id_curso" value="<?php echo $_GET['IDCurso'] ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="button is-danger">
                                <i class="fa-solid fa-eraser"></i>&nbsp;Quitar
                            </button>
                        </form>
                    <?php } else { ?>
                        <form action="agregarCarro.php" method="post">
                            <input type="hidden" name="id_curso" value="<?php echo $rowCurso['IDCurso'] ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                        </form>
                    <?php } ?>

                </div>


                
            </div>
        </div>
        <div class="row mt-4">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Contenido Temático</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comentarios</a>
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Calificacion</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                    <?php echo $rowCurso['Temario'];?> 
                </div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card --> 
</div>


<br><br><br><br>

        <?php
            require_once "vistas/footer.php"; 
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
    
</body>
</html>