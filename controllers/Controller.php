<?php

namespace Controllers;

use MVC\Router;

class Controller{

    public static function index(Router $router){
        

        $router->render('main/index', [
            'titulo' => 'Curriculum'         
        ]);
    }


    public static function objetivos(Router $router){
        

        $router->render('main/objetivos', [
            'titulo' => 'Curriculum || Objetivos'         
        ]);
    }

    public static function formacion(Router $router){
        

        $router->render('main/formacion', [
            'titulo' => 'Curriculum || Formacion'         
        ]);
    }
}