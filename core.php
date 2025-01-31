
<?php
/**
* evaluación agencia demoños
*@author $Luis Fernando Mendez Barrera
 * @since 2025-01-30
 * @version 1.0.0
*Controlador que permite la conexión ala base de datos 
*y almacenado de directorios de la aplicación ademas permite el 
*funcionamiento de la misma que seria el núcleo.*/
session_start();
include_once(__DIR__.'/config.php');
include_once(__DIR__.'/lib/db.php');


spl_autoload_register(function ($class) {
   if (file_exists(__DIR__.'/controller/' . $class . '.php')) {
      require __DIR__.'/controller/' . $class . '.php';
   }
   if (file_exists(__DIR__.'/models/' . $class . '.php')) {
      require __DIR__.'/models/' . $class . '.php';
   }
});
$db = Connection::connect($config);
include_once(__DIR__ . "/routes/route.php");
if (!empty($route)) {
   $routes=explode('@',$route);
   $controller=ucfirst($routes[0]);
   $model= ucfirst(str_replace("Controller",'',$routes[0])).'Model';
   $action = lcfirst($routes[1]);
   /*var_dump($routes)*/
   //exit;
}
else{
   $controller= 'HomeController';
   $model= 'HomeModel';
   $action = 'indexAction';
}
/*var_dump($model)*/
   $load_new = new $controller;
   $model = new $model();
   /*var_dump($load_new)*/
   $load_new->model = $model;
   $model->db = $db;
   /*var_dump(index)*/
   $index = $load_new->$action();
