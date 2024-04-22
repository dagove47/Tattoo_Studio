<?php
require_once "../models/reservaModel.php";

class ReservaController
{
    public function procesarEnvio(){
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $fecha = $_POST["fecha"];
            $descripcion = $_POST["descripcion"];
            $email = $_POST["email"]; // Se añade el campo de teléfono
            $telefono = $_POST["telefono"];
            
            // Llamar al modelo para guardar el contacto
            if(Reserva::guardarReserva($fecha, $descripcion, $email, $telefono)){
                // Mostrar un mensaje de éxito y redirigir a la página de contacto
                echo "success";
            } else {
                // Mostrar un mensaje de error
                echo "error";
            }
        }
    }
}

// Crear una instancia del controlador y procesar el envío del formulario
$reservaController = new ReservaController();
$reservaController->procesarEnvio();
?>
