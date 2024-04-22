<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>Ingresar - Tattoo Studio</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/registerLogin.css" />
</head>

<body class="login_body">

    <header>
      <?php
        session_start();

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === true) {
                include '../components/navbarAdmin.php';
            } else {
                include '../components/navbarUser.php';
            }
        } else {
            include '../components/navbar.php';
        }
      ?>
    </header>


    <section class="access">
        <form method="POST" action="../../controllers/loginController.php">
            <input class="accessInput" type="text" name="email" placeholder="Correo o Usuario" required>
            <input class="accessInput" type="password" name="password" placeholder="Contraseña" required>
            <input class="accessInput submit_btn" type="submit" value="Iniciar sesión">
        </form>
        <p class="access_text">No tienes una cuenta? <a href="./register.php">regístrate</a></p>
    </section>
    <footer class="main_footer">
        <p>&copy; 2024 <span style="color: #F29727;">Nebularte</span> Tattoo</p>
    </footer>
</body>

</html>