<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Encabezado y estilos -->
    <title>Cotización de Tatuaje - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/contact.css" />
    <style>
        .content-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <header>
        <?php include '../components/navbar.php'; ?>
    </header>
    <main class="coverImageContainer">
        <section class="coverImage">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 content-container">
                        <div class="contact-card">
                            <div class="card-body">
                                <h2 class="card-title text-center mb-4">Cotización de Tatuaje</h2>
                                <form id="contactForm" method="post" action="../../controllers/cotizacioncontroller.php" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="correo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Teléfono:</label>
                                        <input type="tel" class="form-control" id="phone" name="telefono" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="style" class="form-label">Estilo de Tatuaje:</label>
                                        <select class="form-select" id="style" name="estilo" required>
                                            <option value="Realismo">Realismo</option>
                                            <option value="Tradicional">Tradicional</option>
                                            <option value="Geométrico">Geométrico</option>
                                            <option value="Acuarela">Acuarela</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Descripción:</label>
                                        <textarea class="form-control" id="description" name="descripcion" rows="4" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Adjuntar Imagen de Referencia:</label>
                                        <input type="file" class="form-control" id="image" name="imagen" accept="image/jpeg, image/png, image/gif" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-orange">Enviar Cotización</button>
                                    </div>
                                </form>
                                <p id="responseMessage" class="mt-3"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 <span style="color: #F29727;">Nebularte</span> Tattoo</p>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Script para manejar el formulario y mostrar SweetAlert -->
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault(); // Evitar el envío del formulario predeterminado

                // Enviar el formulario mediante AJAX
                $.ajax({
                    type: 'POST',
                    url: '../../controllers/cotizacioncontroller.php',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.trim() === 'success') {
                            // Mostrar SweetAlert de éxito si la cotización se guardó correctamente
                            Swal.fire('¡Cotización guardada correctamente!', '', 'success').then(function() {
                                // Restablecer el formulario después de cerrar el SweetAlert
                                $('#contactForm')[0].reset();
                            });
                        } else {
                            // Mostrar SweetAlert de error si hubo un problema al guardar la cotización
                            Swal.fire('¡Error al guardar la cotización!', '', 'error');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
