<?php
require_once "../models/cotizacionAdmin.php";

$cotizacion = new Cotizacion();

switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $cotizaciones = $cotizacion->listarCotizaciones();
        $data = array();

        foreach ($cotizaciones as $cot) {
            $rutaImagen = str_replace("views/", "", $cot->getRutaImagen()); // Eliminar "views" de la ruta de la imagen
            $data[] = array(
                $cot->getId(),
                $cot->getNombre(),
                $cot->getTelefono(),
                $cot->getCorreo(),
                $cot->getEstilo(),
                $cot->getDescripcion(),
                $rutaImagen // Utilizar la ruta de la imagen modificada
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
    case 'eliminar':
        if (isset($_POST['id'])) {
            $id_cotizacion = $_POST['id'];
            $success = $cotizacion->eliminarCotizacion($id_cotizacion);
            echo json_encode(array("success" => $success));
        } else {
            echo json_encode(array("success" => false, "message" => "ID de cotización no proporcionado."));
        }
        break;
    default:
        // Si no se proporciona una operación válida, mostrar un mensaje de error
        echo "<script>alert('Operación no válida.'); window.location.href='http://localhost/Tattoo_Studio24/views/pages/cotizacionAdmin.php'</script>";
        break;
}
?>
