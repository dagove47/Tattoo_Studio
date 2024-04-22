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
                        <th>Fecha Disponibilidad</th>



                    </thead>
                    <tbody>

                    </tbody>
                    <tfooter>
                        <th>Fecha Disponibilidad</th>
                    </tfooter>
                </table>
                <ul>

                </ul>
            </div>
            <div class="col-md-4">
                <div class="form-container text-center">
                    <h2 class="text-center mb-4">Bookings</h2>



                    <form id="form" method="post" action="../../controllers/reservaController.php">
                        <div class="form-group">
                            <label for="fecha"></label>
                            <input type="date" id="fecha" class="form-control"name="fecha" value="2024-04-01" min="2024-01-01" max="2024-12-31">

                        </div>


                        <div class="form-group">
                            <label for="descripcion"></label>
                            <textarea type="descripcion" name="descripcion" class="form-control" id="descripcion" placeholder="Descripcion del tatuaje" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" name="email" class="form-control" id="email" required placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="telefono"></label>
                            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Numero de Telefono" required>
                        </div>
                        <button type="submit" class="btn btn-orange">Enviar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>






    <footer>
        <?php include '../components/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../plugins//DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/agenda.js"></script>
    
    
    <script>
        $(document).ready(function() {
            $('#form').submit(function(e) {
                e.preventDefault(); // Evitar el envío del formulario predeterminado

                // Enviar el formulario mediante AJAX
                $.ajax({
                    type: 'POST',
                    url: '../../controllers/reservaController.php',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.trim() === 'success') {
                            // Mostrar SweetAlert de éxito si la cotización se guardó correctamente
                            Swal.fire('Reservacion guardada correctamente!', '', 'success').then(function() {
                                // Restablecer el formulario después de cerrar el SweetAlert
                                $('#form')[0].reset();
                            });
                        } else {
                            // Mostrar SweetAlert de error si hubo un problema al guardar la cotización
                            Swal.fire('¡Fecha no disponible!', '', 'error');
                        }
                    }
                });
            });
        });
    </script>


</body>

</html>