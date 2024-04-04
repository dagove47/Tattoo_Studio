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

<body>

    <header>
        <?php include '../components/navbar.php'; ?>
    </header>



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center card-title">Fechas Disponibles</h3>
                <table id="tbllistado" class="table table-striped table-bordered table-hover">
                    <thead>
                       <tr>
                        <th>Fecha</th>
                       </tr>  
                        
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="form-container text-center">
                    <h2 class="text-center mb-4">Bookings</h2>

                    <form id="book" method="POST">
                        <div class="form-group">
                            <label for="nombre"></label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha"></label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"></label>
                            <textarea type="descripcion" class="form-control" id="descripcion" placeholder="Descripcion del tatuaje" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    



    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>

    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/agenda.js"></script>



</body>

</html>