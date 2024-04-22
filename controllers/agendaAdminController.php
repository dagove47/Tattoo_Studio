<?php
require_once '../models/agendaAdmin.php';

class AgendaAdminController
{

    public function procesarEnvio()
    {
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $fecha = $_POST["fecha"];


            // Llamar al modelo para guardar el contacto
            if (AgendaAdmin::insertarNuevasFechas($fecha)) {
                // Mostrar un mensaje de éxito y redirigir a la página de contacto
                echo "success";
            } else {
                // Mostrar un mensaje de error
                echo "error";
            }
        }
    }
} 

$agendaAdminController = new AgendaAdminController();

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $fecha = new AgendaAdmin();
        $fechas = $fecha->listarFechasDb();
        $data = array();

        foreach ($fechas as $reg) {
            $data[] = array(
                $reg->getFecha(), // Agregar cada fecha directamente al array
                $reg->getDisponibilidad(),
                $reg->getDescripcion(),
                $reg->getEmail(),
                $reg->getTelefono()
            );
        }

        // Construye el resultado como un simple array de datos
        $resultados = array(
            "sEcho" => 1, // Información para datatables
            "iTotalRecords" => count($data), // Total de registros al datatable
            "iTotalDisplayRecords" => count($data), // Total de registros a visualizar
            "aaData" => $data
        );

        // Envía el JSON con los resultados
        echo json_encode($resultados);
        break;
    case 'insertar':
        $agendaAdminController->procesarEnvio();
        break;
    case 'eliminar_fecha':
        // Obtener el ID de la fecha a eliminar
        $fecha = $_POST['fecha'];
        // Llamar al modelo para eliminar la fecha
        if (AgendaAdmin::eliminarFecha($fecha)) {
            echo "success";
        } else {
            echo "error";
        }
        break;
}
