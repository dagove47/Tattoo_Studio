<?php 
require  '../models/charts.php';

class dashboardController {
    
    // Método para mostrar el primer gráfico
    public function chart1Action() {
        $chartModel = new Charts();
        $chartData = $chartModel->chart1();
        // Renderizar la vista del gráfico 1
        include 'views/chart1.php'; // Puedes crear este archivo en la carpeta 'views'
    }
    
    // Método para mostrar el segundo gráfico
    public function chart2Action() {
        $chartModel = new Charts();
        $chartData = $chartModel->chart2();
        // Renderizar la vista del gráfico 2
        include 'views/chart2.php'; // Puedes crear este archivo en la carpeta 'views'
    }
    
    // Métodos similares para los otros gráficos...

}

// Ejemplo de uso
$controller = new ChartsController();

// Llama al método correspondiente según la solicitud
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if (method_exists($controller, $action . 'Action')) {
        $controller->{$action . 'Action'}();
    } else {
        // Manejar solicitud no válida
        echo 'Acción no válida';
    }
}

?>

?>