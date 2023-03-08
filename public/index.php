<?php
// FRONT CONTROLLER
require __DIR__."/../vendor/autoload.php";

$pagina = $_SERVER['PATH_INFO'] ?? '/home';
$metodo = $_SERVER['REQUEST_METHOD'];

$routes = require_once __DIR__."/../config/routes.php";
$controllerClass = $routes["$metodo|$pagina"] ?? Estrutura_site\Mvc\Controllers\homeController::class;

$controller = new $controllerClass;


$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();

$creator = new \Nyholm\Psr7Server\ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$serverRequest = $creator->fromGlobals();

// var_dump($serverRequest);

$response = $controller->handle($serverRequest);

// echo '<pre>'.print_r($response ,1).'</pre>';

http_response_code($response->getStatusCode());
echo $response->getBody();
?>
