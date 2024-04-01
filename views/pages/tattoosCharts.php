<?php
    include("pChart2.1.4/class/pData.class.php");
    include("pChart2.1.4/class/pDraw.class.php");
    include("pChart2.1.4/class/pImage.class.php");

    //$datos = json_encode([40, 60, 15, 30, 50, 100]);
    //$datosA = json_encode(['Rojo', 'Azul', 'Verde', 'Amarillo', 'morado', 'Naranja']);

    /*include("datosCharts.php");

    $chart1 = datosCharts::chart1();
    $chart2 = datosCharts::chart2();
    $chart3 = datosCharts::chart3();
    $chart4 = datosCharts::chart4();
    $chart5 = datosCharts::chart5();
    
    $chart1C = datosCharts::chart1C();
    $chart2C = datosCharts::chart2C();
    $chart3C = datosCharts::chart3C();
    $chart4C = datosCharts::chart4C();
    $chart5C = datosCharts::chart5C();
    */
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gráfico con PHP y Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .chart {
            height: 400px;
            width: 400px;
        }
    </style>
</head>

<body>
    <div class="chart">
        <canvas id="chart1" width="400" height="400"></canvas>
    </div><br />
    <div class="chart">
        <canvas id="chart2" width="400" height="400"></canvas>
    </div><br />
    <div class="chart">
        <canvas id="chart3" width="400" height="400"></canvas>
    </div><br />
    <div class="chart">
        <canvas id="chart4" width="400" height="400"></canvas>
    </div><br />
        <div class="chart">
        <canvas id="chart5" width="400" height="400"></canvas>
    </div>


    <script>
        var ctx1 = document.getElementById('chart1').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'bar', // El tipo de gráfico: barra, línea, dona, etc.
            data: {
                labels: <?php echo $datosA; ?>,
                datasets: [{
                    label: 'Top 5 técnicas',
                    data: <?php echo $datos; ?>, // Datos pasados desde PHP
                    backgroundColor: 'rgba(255, 0, 0, 1)',
                    borderColor: 'rgba(0, 0, 0, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx2 = document.getElementById('chart2').getContext('2d');
        var chart2 = new Chart(ctx2, {
            type: 'bar', // El tipo de gráfico: barra, línea, dona, etc.
            data: {
                labels: ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Morado', 'Naranja'],
                datasets: [{
                    label: 'Top 5 clientes',
                    data: <?php echo $datos; ?>, // Datos pasados desde PHP
                    backgroundColor: 'rgba(0, 255, 0, 1)',
                    borderColor: 'rgba(0, 0, 0, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx3 = document.getElementById('chart3').getContext('2d');
        var chart3 = new Chart(ctx3, {
            type: 'bar', // El tipo de gráfico: barra, línea, dona, etc.
            data: {
                labels: ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Morado', 'Naranja'],
                datasets: [{
                    label: 'Top 5 zonas tatuadas',
                    data: <?php echo $datos; ?>, // Datos pasados desde PHP
                    backgroundColor: 'rgba(125, 0, 125, 1)',
                    borderColor: 'rgba(0, 0, 0, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx4 = document.getElementById('chart4').getContext('2d');
        var chart4 = new Chart(ctx4, {
            type: 'bar', // El tipo de gráfico: barra, línea, dona, etc.
            data: {
                labels: ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Morado', 'Naranja'],
                datasets: [{
                    label: 'Rango de edades',
                    data: <?php echo $datos; ?>, // Datos pasados desde PHP
                    backgroundColor: 'rgba(125, 125, 0, 1)',
                    borderColor: 'rgba(0, 0, 0, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctx5 = document.getElementById('chart5').getContext('2d');
        var chart5 = new Chart(ctx5, {
            type: 'bar', // El tipo de gráfico: barra, línea, dona, etc.
            data: {
                labels: ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Morado', 'Naranja'],
                datasets: [{
                    label: 'Tatuaje más costo por zona',
                    data: <?php echo $datos; ?>, // Datos pasados desde PHP
                    backgroundColor: 'rgba(0, 0, 255, 1)',
                    borderColor: 'rgba(0, 0, 0, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

</body>

</html>