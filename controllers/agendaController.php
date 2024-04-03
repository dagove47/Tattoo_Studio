<?php 

require_once '../models/agenda.php';

   switch ($_GET["op"]) {
        case 'listar_para_tabla':
            $fecha = new Agenda();
            $fechas = $fecha->listarFechasDb();
            $data = array();          
            foreach ($fechas as $reg) {
               
                $data[] = array(
                    "0" => $reg->getFecha()                
                );
            }

            $resultados = array(
                "sEcho" => 1, #informacion para datatables
                "iTotalRecords" =>count($data), ## total de registros al datatable
                "iTotalDisplayRecords" => count($data), ## enviamos el total de registros a visualizar
                "aaData" => $data
            );
            echo json_encode($resultados);
            break;
        }

?>