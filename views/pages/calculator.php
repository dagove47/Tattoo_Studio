<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>Calculadora - Tattoo Studio</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/calculator.css" />
    <!-- JS -->
    <script src="../assets/js/calculator.js" defer></script>
</head>
<body>
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
    <main>
      <section class="calculator" id="calculator">
        <div class="calculator-container">
            <h1>Calculadora de tatuajes</h1>
            <form id="tattooForm">
                <label for="city">Sede:</label>
                <select id="city" name="city">
                    <option value="San Jose">San Jose</option>
                    <option value="Heredia">Heredia</option>
                    <option value="Cartago">Cartago</option>
                </select>

                <label>Color:</label>
                <input type="radio" id="blackGrey" name="color" value="Black & Grey" checked>
                <label for="blackGrey">Black & Grey</label>
                <br>
                <input type="radio" id="color" name="color" value="Color">
                <label for="color">Color</label>

                <label for="size">Tamaño:</label> <span id="sizeValue"></span></label>
                <input type="range" id="size" name="size" min="0" max="7" step="1" value="3">
                
                <label for="detail">Cantidad de detalles:</label> <span id="detailValue"></span></label>
                <input type="range" id="detail" name="detail" min="0" max="3" step="1" value="1">

                <label for="experience">Experiencia del artista:</label> <span id="experienceValue"></span></label>
                <input type="range" id="experience" name="experience" min="0" max="6" step="1" value="3">
                <input type="submit" value="Calcular Costo">
            </form>
            <div id="result"></div>
        </div>
      </section>
    </main>
    <?php include '../components/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

