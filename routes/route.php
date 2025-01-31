<?php
/**
 * evaluación agencia demoños
*@author $Luis Fernando Mendez Barrera
 * @since 2025-01-30
 * @version 1.0.0
 * Almacenamiento de rutas que permite acceder a los apartados sin depender de la inyección de código en mysql.
 */
if(isset($_GET['action'])){
    $request =$_GET['action'];
    if($request=='home'){$route="HomeController@indexAction";/*var_dump($route)*/}
   if($request=='login'){$route="UserController@loginAction";/*var_dump($route)*/}
   if($request=='logout'){$route="UserController@logoutAction";}
   if($request=='register'){$route="UserController@registerAction";}
}