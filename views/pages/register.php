<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>Registro - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/registerLogin.css" />
</head>

<body class="signup_body">

    <header>
      <?php include '../components/navbar.php'; ?>
    </header>

    <section class="access">
        <form method="POST" action="../../controllers/registerController.php">
            <input class="accessInput" type="text" name="name" placeholder="Nombre" required>
            <input class="accessInput" type="text" name="lastname" placeholder="Apellidos" required>
            <input class="accessInput" type="email" name="email" placeholder="Correo electrónico" required>
            <input class="accessInput" type="password" name="password" placeholder="Contraseña" required>
            <input class="accessInput submit_btn" type="submit" value="Registrarse">
        </form>
        <p class="access_text">Tienes cuenta? <a href="/login">Iniciar sesión</a></p>
    </section>
    <footer class="main_footer">
        <p>&copy; 2024 <span style="color: #F29727;">Nebularte</span> Tattoo</p>
    </footer>
</body>

</html>