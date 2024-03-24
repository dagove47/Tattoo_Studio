<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="./assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>Contacto - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />
<link rel="stylesheet" href="assets/css/contact.css" />

</head>
<body>
    <header class="indexHeader">
    <span style="color: #F29727;">Nebularte</span></p>
        </div>
    </header>
    <main class="coverImageContainer">
        <section class="coverImage">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-card">
                            <div class="card-body">
                                <h2 class="card-title text-center mb-4">Contacto</h2>
                                <form id="contactForm" method="post">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Mensaje:</label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-orange">Enviar</button>
                                    </div>
                                </form>
                                <p id="responseMessage" class="mt-3"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-center mb-4">Ubicación</h2>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31435.03710849209!2d-84.19746837242239!3d9.985465683396926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fa32fcfe0c5f%3A0x5c773032646dc470!2zSGVyZWRpYSwgQmVsw6lu!5e0!3m2!1ses-419!2scr!4v1711256820770!5m2!1ses-419!2scr"
                                     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="../static/js/app.js"></script>
</body>
</html>