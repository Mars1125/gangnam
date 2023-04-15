<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/identidad.css">
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
        <div class="container-fluid p-0">
            <div class="">
                <img src="../src/banner-identidad-5.png" alt="..." class="w-100">
            </div>
            <div class="my-5">
                <blockquote class="blockquote">
                    <p class="text-center eslogan-identidad"><strong>"</strong>Descubre tu belleza, expresate con
                        nuestros productos<strong>"</strong></p>
                </blockquote>
            </div>
        </div>
        <div class="container d-flex-row justify-content-md-center mt-3 mb-5 px-4 ">
            <div class="row p-2 contenedor-identidad-valores  ">
                <div class="col-lg-6 col-md-6 col-sm-12 p-4 mt-3">
                    <p class="text-center text-title-identidad">Mision</p>
                    <p class="text-identidad">Gangnam Beauty ofrece cosméticos de alta calidad que promueven la belleza
                        y el cuidado personal a
                        un
                        mejor precio.
                        Nuestro compromiso es ayudar a las personas a sentirse bien con ellas mismas, resaltando su
                        belleza
                        única y fomentando la confianza en sí mismas
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 p-4 mt-3">
                    <p class="text-center text-title-identidad">Vision</p>
                    <p class="text-identidad">Ser conocidos como lideres en el mercado de cosméticos destacando por
                        ofrecer productos
                        innovadores
                        de alta calidad y respetuosos con el medio ambiente. Seremos una marcar comprometida con la
                        salud y
                        el bienestar de las personas, fomentando una belleza autentica y natural que refleje la
                        personalidad
                        única de cada individuo
                    </p>
                </div>
            </div>
            <div class="row d-flex p-0 mt-5 pt-3">
                <div class="col-lg-6 d-md-block d-none col-sm-12  p-0">
                    <img src="../src/registro.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 p-4">
                    <p class="text-center text-title-identidad">Valores</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 lista-valores">
                            <p class="text-center"><strong>Sostenibilidad:</strong><br> Respetar el medio ambiente y ser
                                conscientes del
                                impacto
                                que generamos en
                                él.</p><br>
                            <p class="text-center"><strong>Empoderamiento:</strong><br> Fomentar la confianza y el
                                empoderamiento de las
                                personas a
                                través de una belleza auténtica y natural respetando la diversidad y la individualidad
                                de
                                cada persona</p>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 lista-valores">
                            <p class="text-center"><strong>Ética:</strong><br>Mantener altos estándares éticos en todas
                                las áreas de la
                                empresa
                                desde el
                                empaquetado, la distribución, hasta la relación con proveedores y clientes</p><br>
                            <p class="text-center"><strong>Innovación:</strong><br> Estar en constante evolución y
                                mejora buscando siempre
                                nuevas
                                productos para
                                ofrecer a nuestro clientes</p>
                        </div>
                    </div>
                    <div class="row d-flex p-0 mb-4 mt-4">
                        <div class="col-12 contenedor-identidad-objetivos">
                            <p class="text-center text-title-identidad pt-3">Objetivos</p>
                            <ul class=" lista-valores px-3 pb-3">
                                <li>Expandir la presencia de la marca en el mercado local de cosméticos en México</li>
                                <li>Aumentar la presencia en el mercado global de la industria de la belleza y el
                                    cuidado
                                    personal.
                                </li>
                                <li>Mejorar la calidad y la variedad de los productos ofrecidos para satisfacer las
                                    necesidades
                                    de los clientes
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
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