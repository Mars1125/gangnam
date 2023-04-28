<?php

include_once "vistas/header.php";
include_once "funciones.php";
require "bd/config.php";

$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {

?>
<link rel="stylesheet" type="text/css" href="botones.css">
<section class="hero is-info">
        <div class="hero-body">
            <div class="container text-center">
                <h1 class="title">
                    <br><br><br>
                    Todavía no hay cursos en el carro de compras
                    <br>
                </h1>
                <h2 class="subtitle">

                    Visita el catalogo de cursos para agregar productos a tu carrito

                </h2>
                <br><br>
                <a href="CursosCatalogo.php" class="d-block btn btn1">Visitar el catálogo</a>
            </div>
        </div>
</section>
                    <br><br><br><br><br><br><br>

<?php } else { ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">


<script src="https://www.paypal.com/sdk/js?components=buttons,hosted-fields&client-id=<?php echo CLIENT_ID;?>&currency=<?php echo CURRENCY;?>"></script>

    <title>
        Carrito
    </title>
</head>

<body class="justify-content-center">
    <div class="container">
    <div class="columns">
        <div class="column">
<br>
<br>
            <h2 class="is-size-2 text-center"><b>Mi carrito de compras</b></h2>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->Precio;
                    ?>
                        <tr>
                            <td><img src="Imagenes/<?php echo $producto->Imagen ?>" alt="Imagen de Curso" width="150" heigth="140"></td>
                            <td><?php echo $producto->NombreCurso ?></td>
                            <td><?php echo $producto->Detalles ?></td>
                            <td>$<?php echo number_format($producto->Precio, 2) ?></td>
                            <td>
                                <form action="eliminarCarrito.php" method="post">
                                    <input type="hidden" name="id_curso" value="<?php echo $producto->IDCurso ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger" style='width:50px; height:30px'>
                                        <i class="fa-solid fa-eraser"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="4" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <br>
        </div>

    </div>

    <div id="paypal-button-container" align="center"></div>
        <script>
            paypal.Buttons({
                style:{
                    color: 'blue',
                    shape: 'pill',
                    label: 'pay'
                },
                createOrder: function(data,actions){
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: <?php echo $total;?>
                            }
                        }]
                    });
                },

                onApprove: function(data,actions) {
                    let URL = 'clases/captura.php'
                    let pagoExitoso = 'pagoCompletado.php'
                    actions.order.capture().then(function(detalles){
                        console.log(detalles);


                        return fetch(URL,{
                            method: 'post',
                            headers: {
                                'content-type': 'application/json'
                            },
                            body: JSON.stringify({
                                detalles: detalles
                            })
                        }) 
                    });   location.href='pagoCompletado.php'
                },

                onCancel: function(data) {
                    alert("Pago Cancelado"),
                    console.log(data);
                }


            }).render('#paypal-button-container');




        </script>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>


<?php } ?>
<?php include_once "vistas/footer.php" ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>


    
</body>
</html>