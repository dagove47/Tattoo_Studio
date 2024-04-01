<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Encabezado y estilos -->
    <title>Contacto - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/agenda.css" />
</head>
<body>

<header>
        <?php include '../components/navbar.php'; ?>
    </header>

        
        <div id="calendar"></div>

        <div class="modal" id="addEventModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario para agregar evento -->
                <form id="eventForm">
                    <div class="mb-3">
                        <label for="eventName" class="form-label">Nombre del Evento</label>
                        <input type="text" class="form-control" id="eventName" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Fecha del Evento</label>
                        <input type="date" class="form-control" id="eventDate" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Evento</button>
                </form>
            </div>
        </div>
    </div>
</div>
        

    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>

    <script src="../assets/js/agenda.js"></script>



</body>
</html>
