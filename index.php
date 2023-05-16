<?php
include_once("Vistas/header.php");
include("controllers/ProductController.php");

if (isset($_REQUEST['action']) && isset($_REQUEST['controller'])) {
    $act = $_REQUEST['action'];
    $cont = $_REQUEST['controller'];

    $controller = new $cont();
    $controller->$act();
} else {
    // Página de entrada - Tienda de Objetos de Mario Kart
    echo '
    <div class="container mt-3">
        <h1>Tienda de Objetos de Mario Kart</h1>
        <div class="d-flex justify-content-center">
        <img src="Vistas/img/imageninicio.png" height="300px">
            <p>Bienvenido a la tienda de objetos de Mario Kart. Aquí encontrarás una amplia variedad de objetos y potenciadores para mejorar tu experiencia de juego en el mundo de Mario Kart.</p>
        </div>
    </div>
    ';
}

require_once("Vistas/footer.php");
?>
