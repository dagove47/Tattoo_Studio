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

            // Verificar si se recibió el archivo de imagen
            if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
                $allowedExtensions = array("jpg", "jpeg", "png", "gif");
                $fileExtension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);

                if (!in_array($fileExtension, $allowedExtensions)) {
                    echo "El archivo no es una imagen válida.";
                    return false;
                }

                // Leer el contenido del archivo de imagen
                $imagen = file_get_contents($_FILES["imagen"]["tmp_name"]);

                // Llamar al modelo para guardar la cotización con la imagen
                if (Cotizacion::guardarCotizacionConImagen($nombre, $correo, $telefono, $estilo, $descripcion, $imagen)) {
                    // Mostrar un mensaje de éxito y redirigir a la página de cotización
                    echo "<script>alert('¡Cotización enviada correctamente con imagen!'); window.location.href='http://localhost/Tattoo_Studio-main1/Tattoo_Studio-main/views/pages/cotizacion.php';</script>";
                } else {
                    // Mostrar un mensaje de error
                    echo "Hubo un error al enviar la cotización con imagen. Por favor, inténtalo de nuevo.";
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
