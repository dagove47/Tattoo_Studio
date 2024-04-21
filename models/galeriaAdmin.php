<?php
require_once "../Config/Conexion.php";

class GaleriaAdmin {

    

    

    public static function guardarImagen($nombre,$rutaImagen) {
        try {
            $conexion = Conexion::conectar();
            $consulta = $conexion->prepare("INSERT INTO Galeria (nombre, ruta_imagen) VALUES (?, ?)");
            $consulta->execute([$nombre, $rutaImagen]);

            return true; // Si la inserción fue exitosa
        } catch (PDOException $ex) {
            // Aquí podrías manejar el error de alguna manera más específica si lo deseas
            die("Error al guardar la cotización: " . $ex->getMessage());
            return false;  
        }
    }

 
    }

   

?>
