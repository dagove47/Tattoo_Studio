<?php
require_once "../config/Conexion.php";

class Cotizacion {
    public static function guardarCotizacionConRutaImagen($nombre, $correo, $telefono, $estilo, $descripcion, $rutaImagen) {
        $conexion = Conexion::conectar();
        $query = "INSERT INTO cotizaciones (nombre, correo, telefono, estilo, descripcion, rutaImagen) VALUES (?, ?, ?, ?, ?, ?)";

        try {
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $correo);
            $stmt->bindParam(3, $telefono);
            $stmt->bindParam(4, $estilo);
            $stmt->bindParam(5, $descripcion);
            $stmt->bindParam(6, $rutaImagen);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }
}
?>