<?php
require_once "../models/galeriaAdmin.php";

class GaleriaAdminController {
    public function procesarImagen() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nombre = $_POST["nombre"];
            

            // Verificar si se ha subido un archivo de imagen
            if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                // Directorio donde se guardará la imagen
                $directorioImagenes = "../views/assets/images/";

                // Generar un nombre único para la imagen
                $nombreImagen = uniqid('imagen_') . '_' . $_FILES['imagen']['name'];

                // Mover el archivo subido al directorio de imágenes
                if(move_uploaded_file($_FILES['imagen']['tmp_name'], $directorioImagenes . $nombreImagen)) {
                    // La imagen se ha subido correctamente, asignar la ruta de la imagen
                    $rutaImagen = $directorioImagenes . $nombreImagen;
                } else {
                    // Error al mover el archivo, asignar una cadena vacía para la ruta de la imagen
                    $rutaImagen = "";
                }
            } else {
                // No se subió ninguna imagen, asignar una cadena vacía para la ruta de la imagen
                $rutaImagen = "";
            }

            // Guardar la cotización utilizando el modelo
            if (GaleriaAdmin::guardarImagen($nombre, $rutaImagen)) {
                // Cotización guardada correctamente
                echo "success";
            } else {
                // Error al guardar la cotización
                echo "error";
            }
        }

       
    }
}

// Crear una instancia del controlador y procesar la cotización
$galeriaController = new GaleriaAdminController();
$galeriaController->procesarImagen();
?>
