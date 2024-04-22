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
      <section class="home" id="home">
        <div class="title-home">
          <h1>Nebularte</h1><br>
          <h4>Tattoo Studio</h4>
          <a class="scroll-home mb-4" href="#description">
            <p class="m-0">scroll</p>
            <em class="bi bi-arrow-down fs-4"></em>
          </a>
        </div>
      </section>
      <section class="description container" id="description">
        <div class="description-half-sect">
          <img src="https://images.pexels.com/photos/17739456/pexels-photo-17739456/free-photo-of-black-and-white-photo-of-a-tattoo-artist-tattooing-an-arm.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Tattoo artist">
        </div>
        <div class="description-half-sect description-text">
          <h2 class="mb-4" style="color: #F29727;">¿Quiénes somos?</h2>
          <p>Somos un estudio de tatuajes con sede en Belen, Heredia. 
              Nuestro equipo de artistas apasionados tiene años de experiencia en el 
              diseño y la creación de tatuajes únicos y personalizados.</p>
          <p>Nos apasiona el arte del tatuaje y nos enorgullecemos de ofrecer a nuestros 
              clientes una experiencia excepcional.</p>
          <a class="description-link" href="#">Conoce más sobre nosotros</a>
        </div>
      </section>
      <section class="homeIcons" id="homeIcons">
        <div class="homeIcons-box">
          <div class="homeIcons-circle">
            <i class="bi bi-droplet"></i>
          </div>
          <div class="homeIcons-title mt-2"> Black & Grey</div>
        </div>
        <div class="homeIcons-box">
          <div class="homeIcons-circle">
            <i class="bi bi-stars"></i>
          </div>
          <div class="homeIcons-title mt-2"> Personalizados</div>
        </div>
        <div class="homeIcons-box">
          <div class="homeIcons-circle">
            <i class="bi bi-brush"></i>
          </div>
          <div class="homeIcons-title mt-2"> Cover-ups</div>
        </div>
      </section>
    </main>
    <?php include '../components/footer.php'; ?>
</body>
</html>