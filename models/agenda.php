<?php

require_once "../Config/Conexion.php";

class Agenda
{
    // Consulta para obtener las fechas ocupadas

    public static function fecha(){
    
        $conexion=Conexion::conectar();
        $sql = "SELECT Fecha,Disponibilidad FROM Evento_Agenda WHERE Disponibilidad = 0";
        $result = $conexion->query($sql);
       
        // Convertir resultados a formato JSON
        $events = [];
            while ($row = $result->fetchAll()) {
                $events[] = [
                    'Title' => 'Disponible',
                    'start' => $row[0],
                ];
            }
        
        echo json_encode($events);
    }
}

?>
