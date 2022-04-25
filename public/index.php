<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\Controller;
use MVC\Router;

$router = new Router();

//Control de rutas

$router->get('/', [Controller::class, 'index']);
$router->get('/objetivos', [Controller::class, 'objetivos']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();