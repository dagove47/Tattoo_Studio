<?php
require_once '../models/galery.php';

switch ($_GET["op"]) {
    case 'listar_imagenes':
        $galeria = new Galery();
        $imagenes = $galeria->listarImagenes();
        $data = array();       

        foreach ($imagenes as $imagen) {
            // Obtener la ruta de la imagen
            $rutaImagen = $imagen->getRutaImagen();
            // Remover la parte "/views" de la ruta de la imagen
            $rutaImagen = str_replace('/views', '', $rutaImagen);
            // Agregar la ruta de la imagen al array de datos
            $data[] = $rutaImagen;
        }

        echo json_encode($data);
        break;
}

?>