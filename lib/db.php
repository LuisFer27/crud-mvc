/*evaluación agencia demoños
*@author $Luis Fernando Mendez Barrera
 * @since 2025-01-30
 * @version 1.0.0 */
<?php

/* La clase connection permite generar una conexión directa a la base de datos  */
class Connection{
  /**
   *constructor que permite construir la conexión a la base de datos.
   */
    public static  $connection = false;
     private function __construct(){
       
     }

    /**
     * La función connect establece una conexión directa ala base de datos empleando php
     * 
     * @param config La función connect permite la conexión ala base de datos mediante el uso de un enlace para configurar la conexión a mysql.
     * 
     * @return la función connect como regreso manda llamar un mensaje de error en caso de que la conexión sea incorrecta.
     */
     public static function connect($config){
     try{
        if (!self::$connection){
            $conn= new PDO("mysql:host={$config['db']['server']};dbname={$config['db']['dbname']}",$config['db']['dbuser'],$config['db']['dbpass']);
            $conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(\PDO:: ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
            self::$connection=$conn;
            return self::$connection;
        }
     }catch(\PDOException $e){
       echo $e->getMessage();
           exit;
     }
     }
}
