<?php
require_once "../Config/Conexion.php";

class Cotizacion {
    public static function guardarCotizacion($nombre, $correo, $telefono, $estilo, $descripcion, $rutaImagen) {
        try {
            $conexion = Conexion::conectar();
            $consulta = $conexion->prepare("INSERT INTO cotizaciones (nombre, correo, telefono, estilo, descripcion, ruta_imagen) VALUES (?, ?, ?, ?, ?, ?)");
            $consulta->execute([$nombre, $correo, $telefono, $estilo, $descripcion, $rutaImagen]);

            return true; // Si la inserción fue exitosa
        } catch (PDOException $ex) {
            // Aquí podrías manejar el error de alguna manera más específica si lo deseas
            die("Error al guardar la cotización: " . $ex->getMessage());
            return false;
        }
    }
}
?>
