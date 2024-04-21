<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Encabezado y estilos -->
    <title>Contacto - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel=" stylesheet" href="../assets/css/galery.css" />
</head>

<body>

    <header>
        <div class="main_buttons">
            <div class="main_btn"><a href="../index.php">Inicio</a></div>
            <div class="main_btn"><a href="./register.php">Registrarse</a></div>
            <div class="main_btn"><a href="./login.php">Iniciar sesión</a></div>
            <div class="main_btn"><a href="./galery.php">Galeria </a></div>
            <div class="main_btn"><a href="./contact.php">Contacto</a></div>

        </div>
    </header>


    <div id="carouselExampleIndicators" class="carousel slide">
    <h1 class="text-center text-warning bi bi-images">Galería de Tattoos</h1>
    <div class="carousel-indicators">
        <!-- Los indicadores se cargarán aquí dinámicamente -->
    </div>
    <div class="carousel-inner" id="gallery">
        <!-- Las imágenes se cargarán aquí dinámicamente -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="display: none;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="display: none;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Bootstrap Bundle JS (Bootstrap JS + Popper JS) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Script para cargar las imágenes y los indicadores -->
<script>
$(document).ready(function() {
    $.ajax({
        url: "../../controllers/galeryController.php?op=listar_imagenes",
        type: "GET",
        success: function(data) {
            var imagenes = JSON.parse(data);
            
            // Iterar sobre cada imagen
            for (var i = 0; i < imagenes.length; i++) {
                var itemClass = (i === 0) ? "carousel-item active" : "carousel-item";
                var imgTag = '<img src="' + imagenes[i] + '" class="d-block w-100">';
                var carouselItem = '<div class="' + itemClass + '">' + imgTag + '</div>';
                $("#gallery").append(carouselItem);
                
                // Generar indicadores
                var indicatorClass = (i === 0) ? "active" : "";
                var indicatorButton = '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' + i + '" class="' + indicatorClass + '" aria-label="Slide ' + (i+1) + '"></button>';
                $(".carousel-indicators").append(indicatorButton);
            }
            
            // Verificar si hay más de una imagen para mostrar los controles de navegación
            if (imagenes.length > 1) {
                // Agregar los botones de control previo y siguiente
                $(".carousel-control-prev, .carousel-control-next").show();
            }
        }
    });
});
</script>
   




    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>
</body>

</html>