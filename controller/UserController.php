<?php

/*
Clase HomeController.
Esta clase permite almacenar la lógica que lleva el inicio de sesión de igual forma se almacenan los datos de los usuarios. */
class UserController
{
    public $model;

 /**
  * la función `checkUserAccess` permite verificar si se realizo el inicio de sesión correctamente o no.
  */
    public function checkUserAccess()
    {
        if (!isset($_SESSION['userLogInStatus'])) {
            require_once('../views/login.php');
            exit;
        }
    }

   /**
    * La función `loginAction` revisa las credenciales si estas están almacenadas en la base de datos.
    * 
    * @return la función `loginAction` ademas puede redireccionar de nuevo a la pantalla de inicio silos datos son incorrectos.
    */
    public function loginAction()
    {
        if (isset($_POST['LoginSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $checkUserLogin = $this->model->CheckUserLogin($username, md5($password));
            if ($checkUserLogin == 1) {
                $_SESSION['userLogInStatus'] = 1;
                return require_once('../views/product.php');
            }
        }
        if (!isset($_SESSION['userLogInStatus'])) {
            return require_once('../views/login.php');
        } else {
            return require_once('../views/product.php');
        }
    }
/**
 * La función `logoutAction` en PHP redirige de nuevo a la pantalla de inicio como su nombre lo menciona de esta acción.
 * 
 * @return La función `logoutAction` puede regresar la pantalla de inicio de sesión.
 */
    public function logoutAction()
    {

        unset($_SESSION['userLogInStatus']);
        return require_once('../views/login.php');
    }
/**
 * La función `registerAction` realiza el registro de usuarios. 
 * 
 * @return la función `registerAction` permite realizar la inserción de datos directamente a la base de datos de igual forma se protege la contraseña con md5.
 */
    public function registerAction()
    {
        if (isset($_POST['RegisterSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->model->UserRegister($username, md5($password));
            $_SESSION['userLogInStatus'] = 1;
        }
        if (!isset($_SESSION['userLogInStatus'])) {
            return require_once('../views/register.php');
        } else {
            return require_once('../views/login.php');
        }
    }
}
