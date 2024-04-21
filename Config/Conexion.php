<?php
require_once "global.php";

class Conexion
{
    public static function conectar(){
        //conexion mysql
        try {
            $cn = new PDO("mysql:host=".DB_HOST_MYSQL.";dbname=".DB_NAME_MYSQL.";charset=utf8",DB_USER_MYSQL,DB_PASSWORD_MYSQL);
            $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Mensaje de conexión exitosa
            /*echo "Conexión exitosa a la base de datos.";*/
            
            return $cn;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

} // Fin de la clase Conexion


try {
    $conexion = Conexion::conectar();

} catch (PDOException $ex) {
    echo "Error al conectar a la base de datos: " . $ex->getMessage();
}

