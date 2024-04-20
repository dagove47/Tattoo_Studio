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
                echo "<script>alert('¡Mensaje enviado correctamente!'); window.location.href='http://localhost/Tattoo_Studio/views/pages/agenda.php';</script>";
            } else {
                // Mostrar un mensaje de error
                echo "<script>alert('La fecha seleccionada no está disponible para hacer la reserva. Por favor, elige otra fecha.'); window.location.href='http://localhost/Tattoo_Studio/views/pages/agenda.php'</script>";

            }
        }
    }
}

// Crear una instancia del controlador y procesar el envío del formulario
$reservaController = new ReservaController();
$reservaController->procesarEnvio();
?>
