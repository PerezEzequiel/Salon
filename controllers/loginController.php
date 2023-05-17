<?php

namespace Controllers;

use Model\Usuario;
use Mvc\Router;

class LoginController
{
    public static function login(Router $router)
    {
        $router->render('auth/login');
    }
    public static function crear(Router $router)
    {
        $usuario = null;
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario = new Usuario($_POST);
            $alertas = $usuario->validarNuevaCuenta();
            if(!empty($alertas)){
                
            }
        }

        $router->render('auth/crear-cuenta',[
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
    public static function logout()
    {
        echo "Desde logout";
    }
    public static function olvide(Router $router)
    {
        $router->render('auth/olvide-password');
    }
    public static function recuperar()
    {
        echo "Desde recuperar";
    }

}
