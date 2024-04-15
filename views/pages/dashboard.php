<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Encabezado y estilos -->
    <title>Contacto - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/agenda.css" />
</head>

<header>
    <?php
    include '../components/navbar.php';
    ?>
</header>

<body>
    <br />
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="chart" style="height: 400px; width: 400px;"></div>
            </div>
            <div class="col-md-4">
                <div id="chart2" style="height: 400px; width: 400px;"></div>
            </div>
            <div class="col-md-4">
                <div id="chart3" style="height: 400px; width: 400px;"></div>
            </div>
        </div>

    </div>
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="chart4" style="height: 400px; width: 400px;"></div>
            </div>
            <div class="col-md-4">
                <div id="chart5" style="height: 400px; width: 400px;"></div>
            </div>
            <div class="col-md-4">
                <div id="chart6" style="height: 400px; width: 400px;"></div>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php 
    include '../components/footer.php';
    ?>
</footer>

<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chart", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Clientes que más han gastado en un año"
            },
            data: [{
                type: "bar",
                yValueFormatString: "#,##",
                dataPoints: [{
                        label: "Cliente",
                        y: 7
                    }

                ]
            }]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chart2", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Categorías de Tatuajes más Populares"
            },
            data: [{
                type: "bar",
                yValueFormatString: "#,##",
                dataPoints: [{
                        label: "Cliente",
                        y: 7.1
                    }

                ]
            }]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chart3", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Listado de clientes por zona del cuerpo"
            },
            data: [{
                type: "bar",
                yValueFormatString: "#,##",
                dataPoints: [{
                        label: "Cliente",
                        y: 7.1
                    }

                ]
            }]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chart4", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Clientes que más han pagado por una categoría de tatuaje"
            },
            data: [{
                type: "bar",
                yValueFormatString: "#,##",
                dataPoints: [{
                        label: "Cliente",
                        y: 7.1
                    }

                ]
            }]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chart5", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Gráfico de tatuajes por zona del cuerpo por rango de edad"
            },
            data: [{
                type: "bar",
                yValueFormatString: "#,##",
                dataPoints: [{
                        label: "Cliente",
                        y: 7.1
                    }

                ]
            }]
        });
        chart.render();

        var chart = new CanvasJS.Chart("chart6", {
            animationEnabled: true,
            theme: "dark1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Gráfico de rango de edades y técnicas más aplicadas"
            },
            data: [{
                type: "bar",
                yValueFormatString: "#,##",
                dataPoints: [{
                        label: "Cliente",
                        y: 7.1
                    }

                ]
            }]
        });
        chart.render();

    }
</script>

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>

</html>