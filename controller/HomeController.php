<?php

/*evaluación agencia demoños
*@author $Luis Fernando Mendez Barrera
 * @since 2025-01-30
 * @version 1.0.0
Clase HomeController
Esta clase permite a los usuarios usar funcionalidades extendidas del controlador del usuario y propias del controlador del home */
class HomeController extends UserController{
    /**
     * $model:permite mandar a llamar el modelo
     */
    public $model;

/**
 * la función indexAction verifica el acceso al dashboard a partir del inicio de sesión.
 * 
 * @return La ruta `require_once('../views/dashboard.php')` permite acceder ala vista en donde se visualizara lata bla con las funciones CRUD que se implementara .
 */
    public function indexAction(){
        $this->checkUserAccess();
        return require_once('../views/product.php');
    }

 }