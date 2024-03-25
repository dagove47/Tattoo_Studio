<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>Inicio - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <!-- JS -->
    <script src="./assets/js/main.js" defer></script>
</head>
<body>
    <header>
      <?php include '../components/navbar.php'; ?>
    </header>
    <main>
      <section class="home" id="home">
        <div class="title-home">
          <h1>Nebularte</h1><br>
          <h4>Tattoo Studio</h4>
          <a class="scroll-home mb-4" href="#about">
            <p class="m-0">scroll</p>
            <em class="bi bi-arrow-down fs-4"></em>
          </a>
        </div>
      </section>
    </main>
    <?php include '../components/footer.php'; ?>

    <script src="../static/js/app.js"></script>
</body>
</html>