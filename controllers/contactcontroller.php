<?php
require_once "../models/contacto.php";

class ContactoController
{
    public function procesarEnvio(){
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"]; 
            $mensaje = $_POST["mensaje"];
            
            // Llamar al modelo para guardar el contacto
            if(Contacto::guardarContacto($nombre, $correo, $telefono, $mensaje)){
                // Mostrar un mensaje de éxito y redirigir a la página de contacto
                echo "<script>alert('¡Mensaje enviado correctamente!'); window.location.href='http://localhost/Tattoo_Studio-main1/Tattoo_Studio-main/views/pages/contact.php';</script>";
            } else {
                // Mostrar un mensaje de error
                echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
            }
        }
    }
}

// Crear una instancia del controlador y procesar el envío del formulario
$contactoController = new ContactoController();
$contactoController->procesarEnvio();
?>
