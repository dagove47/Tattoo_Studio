<?php
require_once "../models/cotizacionAdmin.php";

$cotizacion = new Cotizacion();

// Operación para listar las cotizaciones y enviar los datos como JSON
switch ($_GET["op"]) {
    case 'listar_para_tabla':
        $cotizaciones = $cotizacion->listarCotizaciones();
        $data = array();

        foreach ($cotizaciones as $cot) {
            $ruta_imagen = str_replace("views/", "", $cot->getRutaImagen()); // Eliminar "views" de la ruta de la imagen
            $data[] = array(
                "ID" => $cot->getId(),
                "nombre" => $cot->getNombre(),
                "telefono" => $cot->getTelefono(),
                "correo" => $cot->getCorreo(),
                "estilo" => $cot->getEstilo(),
                "descripcion" => $cot->getDescripcion(),
                "rutaImagen" => $ruta_imagen // Utilizar la ruta de la imagen modificada
            );
        }

        // Envía el JSON con los resultados
        echo json_encode($data);
        break;
    default:
        // Si no se proporciona una operación válida, mostrar un mensaje de error
        echo json_encode(array("error" => "Operación no válida."));
        break;
}
?>
