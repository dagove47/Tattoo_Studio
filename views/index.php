<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="./assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
    <!-- JS -->
    <script src="./assets/js/main.js" defer></script>
</head>
<body>
    <header class="indexHeader">
        <?php include 'components/logo.php'; ?>
        <div class="access_buttons">
            <div class="access_btn me-3"><a href="/signup">Registrarse</a></div>
            <div class="access_btn"><a href="/login">Iniciar sesión</a></div>
        </div>
    </header>
    <main class="coverImageContainer">
        <section class="coverImage"></section>
    </main>
    <footer></footer>
</body>
</html>