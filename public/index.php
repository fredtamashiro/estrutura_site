<?php
// FRONT CONTROLLER
// require __DIR__."/../vendor/autoload.php";

// $pagina = $_SERVER['PATH_INFO'] ?? '/home';
// $metodo = $_SERVER['REQUEST_METHOD'];

// $routes = require_once __DIR__."/../config/routes.php";
// $controllerClass = $routes["$metodo|$pagina"] ?? Estrutura_site\Mvc\Controllers\homeController::class;

// $controller = new $controllerClass;
// $controller->processar();
$postdata = file_get_contents('php://input');

echo $postdata;
?>
