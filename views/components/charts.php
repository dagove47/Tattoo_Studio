<?php
class datosCharts{

    public function chart1()
    {
        // La consulta SQL
        $mysqli = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
        // Incluir en el Query un 'COUNT(*) as cantidad' para obtener el número total por fila que luego irá en el gráfico
        $query1 = "";

        $result1 = $mysqli->query($query1);

        $topClienteXZona = [];
        if ($result1) {
            while ($row = $result1->fetch_assoc()) {
                $topClienteXZona[] = $row;
            }
        }
        return $topClienteXZona;
    }

    public function chart2()
    {
        // La consulta SQL
        $mysqli = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
        // Incluir en el Query un 'COUNT(*) as cantidad' para obtener el número total por fila que luego irá en el gráfico
        $query2 = "";

        $result2 = $mysqli->query($query2);

        $topClientes = [];
        if ($result2) {
            while ($row = $result2->fetch_assoc()) {
                $topClientes[] = $row;
            }
        }
        return $topClientes;
    }

    public function chart3()
    {
        // La consulta SQL
        $mysqli = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
        // Incluir en el Query un 'COUNT(*) as cantidad' para obtener el número total por fila que luego irá en el gráfico
        $query3 = "";

        $result3 = $mysqli->query($query3);

        $topZonas = [];
        if ($result3) {
            while ($row = $result3->fetch_assoc()) {
                $topZonas[] = $row;
            }
        }
        return $topZonas;
    }

    public function chart4()
    {
        // La consulta SQL
        $mysqli = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");
        // Incluir en el Query un 'COUNT(*) as cantidad' para obtener el número total por fila que luego irá en el gráfico
        $query4 = "";
        $result4 = $mysqli->query($query4);

        $rangoEdades = [];
        if ($result4) {
            while ($row = $result4->fetch_assoc()) {
                $rangoEdades[] = $row;
            }
        }
        return $rangoEdades;
    }

    public function chart5()
    {
        // La consulta SQL
        $mysqli = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");

        $mysqli = new mysqli("tu_host", "tu_usuario", "tu_contraseña", "tu_base_de_datos");

        // Incluir en el Query un 'COUNT(*) as cantidad' para obtener el número total por fila que luego irá en el gráfico
        $query5 = "";
        $result5 = $mysqli->query($query5);

        $topEstilos = [];
        if ($result5) {
            while ($row = $result5->fetch_assoc()) {
                $topEstilos[] = $row;
            }
        }
        return $topEstilos;
    }
}
