<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceRequisicao;

$road = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($road, $routes)) {
    http_response_code(404);
    exit();
}

session_start();

if (!isset($_SESSION['logado']) && $road !== '/login' && $road !== '/logar'){
    header('Location: /login');
    exit();
}

$controllerClass = $routes[$road];
/** @var InterfaceRequisicao $controller */
$controller = new $controllerClass();
$controller->processaRequisicao();