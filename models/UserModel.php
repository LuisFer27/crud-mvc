<?php 
/*evaluación agencia demoños
*@author $Luis Fernando Mendez Barrera
 * @since 2025-01-30
 * @version 1.0.0*/
class UserModel{
    public $db;
/**
 * La función `CheckUserLogin` comprueba si existe un usuario con el nombre de usuario y la contraseña proporcionadas en la
 * base de datos.
 * 
 * @param username La función `CheckUserLogin` permite meter un nombre de usuario o correo electrónico al usuario en la bd :
 * @param password manda a llamar la contraseña proporcionada y esta ya viene cifrada a partir de md5.
 * 
 * @return El código devuelve el resultado de la consulta ejecutada, que es el recuento de filas donde
 * proporcionado nombre de usuario y contraseña coincidentes en la tabla de "usuarios".
 */
    public function CheckUserLogin($username,$password){

        $query= "SELECT  count(*) FROM usuarios WHERE username='{$username}' AND password='{$password}'";
        $stmt=$this->db->prepare($query)->execute();
        print_r($stmt);exit;
        return $stmt;
    }

/**
 * La función `UserRegister` inserta los datos del usuario registrado la base de datos.
 * password.
 * 
 * @param username La función `CheckUserLogin` permite meter un nombre de usuario o correo electrónico al usuario en la bd :
 * @param password manda a llamar la contraseña proporcionada y esta ya viene cifrada a partir de md5.
 * 
 * @return la función UserRegister regresa el valor 1.
 */
    public function UserRegister($username,$password){
        $query="INSERT INTO usuarios (username,password) VALUES ('".$username."','".$password."')";
        $stmt=$this->db->query($query);
        return 1;
    }
}