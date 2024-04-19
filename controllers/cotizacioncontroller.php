<?php
require_once "../models/cotizacion.php";

class CotizacionController
{
    public function procesarEnvio(){
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $estilo = $_POST["estilo"];
            $descripcion = $_POST["descripcion"];

            // Verificar si se recibió el nombre de archivo de la imagen
            if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
                $nombreArchivo = $_FILES["imagen"]["name"];
                
                // Ruta donde se almacenará la imagen en el servidor
                $rutaImagen = "../views/assets/images/" . $nombreArchivo;

                // Obtener la ruta temporal del archivo
                $rutaTemporal = $_FILES["imagen"]["tmp_name"];

                // Verificar si la imagen ya existe en la carpeta de destino
                if (file_exists($rutaImagen)) {
                    echo "La imagen ya existe en la carpeta de destino.";
                } else {
                    // Mover la imagen a la carpeta de destino (opcional)
                    // move_uploaded_file($rutaTemporal, $rutaImagen);

                    // Guardar la cotización con la ruta local de la imagen
                    if (Cotizacion::guardarCotizacionConRutaImagen($nombre, $correo, $telefono, $estilo, $descripcion, $rutaImagen)) {
                        echo "<script>alert('¡Cotización enviada correctamente con imagen!'); window.location.href='http://localhost/Tattoo_Studio-main1/Tattoo_Studio-main/views/pages/cotizacion.php';</script>";
                    } else {
                        echo "Hubo un error al guardar la cotización con imagen.";
                    }
                }
            } else {
                // No se recibió ninguna imagen o ocurrió un error al subirla.
                echo "No se recibió ninguna imagen o ocurrió un error al subirla.";
            }
        }
    }
}

// Crear una instancia del controlador y procesar el envío del formulario
$cotizacionController = new CotizacionController();
$cotizacionController->procesarEnvio();
?>

