<?php

class AgendaController {
    /*public function mostrarFechas() {
        require_once '../models/Agenda.php';
        
        // Crear una instancia del modelo Agenda
        $agendaModel = new Agenda();
        
        // Obtener las fechas desde el modelo
        $fechas = $agendaModel->listarFechasDb();

        // Iniciar o reanudar la sesión
        session_start();
        
        // Guardar las fechas en una variable de sesión
        $_SESSION['fechas'] = $fechas;

        // Incluir la vista
        require '../views/pages/agenda.php';
    
    }*/

  
    


    public function mostrarVista() {
        require_once '../models/agenda.php';
        // Crear una instancia del modelo
        $modelo = new Agenda();
        
        // Obtener los datos del modelo
        $datos = $modelo->obtenerDatos();
        
        // Llamar a la vista y pasar los datos
        require '.../../views/pages/agenda.php';
    }

}
// Crear una instancia del controlador y llamar al método para mostrar la vista
$controlador = new AgendaController();
$controlador->mostrarVista();

?>