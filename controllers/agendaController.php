
<?php
require_once '../models/agenda.php';

/*switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $fecha = new Agenda();
        $fechas = $fecha->listarFechasDb();
        $data = array();       

        foreach ($fechas as $reg) {
            $data[] = $reg->getFecha(); // Agregar cada fecha al array
        }

        // Construye el resultado como un simple array de datos
        echo json_encode($data);
        exit();
}*/


switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $fecha = new Agenda();
        $fechas = $fecha->listarFechasDb();
        $data = array();       

        foreach ($fechas as $reg) {
            $data[] = array(
                $reg->getFecha() // Agregar cada fecha directamente al array
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
       
}



