<?php

namespace Controllers;

use MVC\Router;

class Controller{

    public static function index(Router $router){
        

        $router->render('main/index', [
            'titulo' => 'Curriculum'         
        ]);
    }
}