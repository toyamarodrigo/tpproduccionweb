<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "includes/head.php"; ?>
    <title>Delfos Tour</title>
</head>

<body>
    <?php
    $str_data = file_get_contents("json/paises.json");
    $productos = json_decode($str_data, true);
    require_once "functions/cortar.php";

    $page = 'index';

    require_once "includes/encabezado.php";
    require_once "includes/carousel.php";
    ?>

    <div class="container text-center my-5 destinos-populares">
        <h1>Destinos populares</h1>
    </div>

    <div class="pb-4 text-center">
        <svg width="60%" height="2">
            <rect width="100%" height="100" style="fill:#F78014;stroke-width:0;stroke:rgb(0,0,0)" />
        </svg>
    </div>
    
    <?php
    require_once "includes/productoportada.php";
    require_once "includes/newsletter.php";
    require_once "includes/linkinteresesyherramientas.php";
    require_once "includes/footer.php";
    ?>
</body>

</html>