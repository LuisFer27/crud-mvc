<?php
session_start();
include_once('lib/config.php');
include_once('lib/db.php');


spl_autoload_register(function ($class) {
   if (file_exists('controller/' . $class . '.php')) {
      require 'controller/' . $class . '.php';
   }
   if (file_exists('models/' . $class . '.php')) {
      require 'models/' . $class . '.php';
   }
});
$db = Connection::connect($config);
include_once(__DIR__ . "/../routes/route.php");
if (!empty($route)) {
   $routes=explode('@',$route);
   $controller=ucfirst($routes[0]);
   $model= ucfirst(str_replace("Controller",'',$route[0])).'Model';
   $action = lcfirst($routes[1]);
}
else{
   $controller='indexController';
   $model= 'indexModel';
   $action = 'indexAction';
}

   $load_new = new $controller;
   $model = new $model();
   $load_new->model = $model;
   $model->db = $db;
   $index = $load_new->$action();
