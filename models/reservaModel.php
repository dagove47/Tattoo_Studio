<?php
require_once "../config/Conexion.php";

class Reserva
{
    public static function fechaDisponible($fecha){
        $conexion = Conexion::conectar();
        $query = "SELECT COUNT(*) as total FROM evento_agenda WHERE fecha = ? AND disponibilidad = 0";
        $stmt = $conexion->prepare($query);
        $stmt->execute([$fecha]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['total'] > 0; // Devuelve true si la fecha está disponible (hay reservas disponibles)
    }
    

    public static function guardarReserva($fecha, $descripcion, $email, $telefono){
        $conexion = Conexion::conectar();
        // Verificar si la fecha está disponible
        if (self::fechaDisponible($fecha)) {
            $query = "UPDATE evento_agenda SET disponibilidad = 1, descripcion = ?, correo = ?, telefono = ? WHERE fecha = ?";
            try {
                $stmt = $conexion->prepare($query);
                $stmt->execute([$descripcion, $email, $telefono, $fecha]);
                return true;
            } catch (PDOException $ex) {
                return false;
            }
        } else {
            return false; // La fecha no está disponible para una nueva reserva
        }
    }
    
}