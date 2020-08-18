<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "includes/head.php"; ?>
    <title>Document</title>
</head>

<body>

    <?php 
    $page = 'paquetes';
    require_once "includes/encabezado.php"; 
    require_once "includes/carousel.php" 
    ?>

    <div class="container text-center pt-5 pb-4">
        <h1>Conocer Croacia y Eslovenia con Serbia y Bosnia</h1>
    </div>

    <div class="pb-5 text-center">
        <svg width="20%" height="2">
            <rect width="100%" height="100" style="fill:rgb(255,165,0);stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>

    <section>
        <div class="container shadow justify-content-around p-4">
            <div class="row justify-content-center text-center">

                <div class="col-4">
                    <div class="imagen1">
                        <a href="images/Untitled-3.png" data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="images/Untitled-3.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="imagen2 img-fluid">
                        <a href="images/Untitled-2.png" data-fancybox="gallery" data-caption="Caption for single image">
                            <img height="auto" width="100%" src="images/Untitled-2.png" alt="imagen de acantilado">
                        </a>
                    </div>
                </div>

                <div class="col-4">
                    <div class="imagen3">
                        <div data-toggle="modal" data-target="#myModal2">
                            <a href="images/Untitled-4.png" data-fancybox="gallery" data-caption="Caption for single image">
                                <img height="auto" width="100%" src="images/Untitled-4.png" alt="imagen de acantilado">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="descripcion py-5">
        <div class="container py-5 shadow">
            <div class="row justify-content-center">
                <div class="col-xs-auto col-sm-11 col-md-10 col-lg-10 incluye py-2">
                    <h5 class="pb-3">
                        Incluye:
                    </h5>
                    <ul>
                        <li> Pasaje aéreo de ida y vuelta en clase económica con restricciones de
                            Air France (salida mayo) y Swiss-Lufthansa(salida: septiembre).</li>
                        <li>
                            Alojamiento en hoteles categoría 4 estrellas (en Ljubljana, Zagreb y
                            Varsovia hoteles 5*) ubicados en planta urbana en habitaciones dobles
                            standard
                            con baño privado, incluyendo desayuno buffet y comidas donde se indica,
                            con menú
                            fijo e idéntico para todos los pasajeros que podrá ser con sistema
                            buffet o
                            servido en la mesa.
                        </li>
                        <li> Transporte en autocar privado. </li>
                        <li> Excursiones y visitas con guía de habla hispana; entradas a museos y
                            monumentos indicadas en el programa.</li>
                        <li> Propinas obligatorias a maleteros en los hoteles (una maleta por
                            persona).</li>
                        <li> Acompañamiento de un representante de la empresa en el tramo aéreo
                            Buenos Aires/Belgrado y durante todo el recorrido terrestre (no incluye
                            acompañamiento en los vuelos de regreso).</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "includes/footer.php"; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</body>

</html>