<?php
require_once "../config/Conexion.php";

class Contacto
{
    public static function guardarContacto($nombre, $correo, $telefono, $mensaje){
        $conexion = Conexion::conectar();
        $query = "INSERT INTO contactos (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)";
        try {
            $stmt = $conexion->prepare($query);
            $stmt->execute([$nombre, $correo, $telefono, $mensaje]);
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }
}
?>