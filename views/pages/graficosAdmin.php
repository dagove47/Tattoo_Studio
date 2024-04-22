<!DOCTYPE html>
<?php require "../../models/charts.php";
    $chart = new Charts();
    $chartD1 = $chart->Chart1();
    $chartD2 = $chart->Chart2();
    $chartD3 = $chart->Chart3();
    $chartD4 = $chart->Chart4();
    $chartD5 = $chart->Chart5();
    $chartD6 = $chart->Chart6();

    $chart1 = json_encode($chartD1);
    $chart2 = json_encode($chartD2);
    $chart3 = json_encode($chartD3);
    $chart4 = json_encode($chartD4);
    $chart5 = json_encode($chartD5);
    $chart6 = json_encode($chartD6);
    ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" href="../assets/images/tattoo-favicon.png" type="image/x-icon"
        title="Tattoo icons created by Freepik - Flaticon from www.flaticon.com" />
    <title>GraficosAdmin - Tattoo Studio</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/css/agendaAdmin.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./adminDashboard.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./home.php" class="brand-link">
                <img src="../assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Nabularte</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Administrador</a>
                    </div>
                </div>
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!--Menu de Agenda-->
                        <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Manejo de Agenda
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./agendaAdmin.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agenda</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./graficosAdmin.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Graficos</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./cotizacionAdmin.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cotizacion</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./galeriaAdmin.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Galeria</p>
                  </a>
                </li>
              </ul>
            </li>
                        <!--Menu de busqueda de datos -->
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Graficos de Reportes</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div id="chart" style="height: 400px; width: 400px;"></div>
                    </div>
                    <div class="col-md-5">
                        <div id="chart2" style="height: 400px; width: 400px;"></div>
                    </div>
                </div>
            </div>
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div id="chart3" style="height: 400px; width: 400px;"></div>
                    </div>
                    <div class="col-md-5">
                        <div id="chart4" style="height: 400px; width: 400px;"></div>
                    </div>
                </div>
            </div>
            <br />
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div id="chart5" style="height: 400px; width: 400px;"></div>
                    </div>
                    <div class="col-md-5">
                        <div id="chart6" style="height: 400px; width: 400px;"></div>
                    </div>
                </div>
            </div><!-- /.container-fluid --> <br />
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <?php include '../components/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chart", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Los 5 clientes que mas han invertido"
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##",
                    dataPoints: [
                        <?php foreach ($chartD1 as $chart):?>
                        { label: "<?php echo $chart->Nombre;?>", y: <?php echo $chart->TotalGastado;?> },
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chart2", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Las 5 tecnicas mas tatuadas"
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##",
                    dataPoints: [
                        <?php foreach ($chartD2 as $chart):?>
                        { label: "<?php echo $chart->Categoria;?>", y: <?php echo $chart->NumeroDeTatuajes;?> },
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chart3", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Las 5 zonas que mas tatuadas"
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##",
                    dataPoints: [
                        <?php foreach ($chartD3 as $chart):?>
                        { label: "<?php echo $chart->ZonaCuerpo;?>", y: <?php echo $chart->NumeroDeTatuajes;?> },
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chart4", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Clientes que más han pagado por una categoría de tatuaje"
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##",
                    dataPoints: [
                        <?php foreach ($chartD4 as $chart):?>
                        { label: "<?php echo $chart->Nombre;?>", y: <?php echo $chart->TotalGastado;?> },
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chart5", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Las 5 edades que mas se tatuan"
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##",
                    dataPoints: [
                        <?php foreach ($chartD5 as $chart):?>
                        { label: "<?php echo $chart->Edad;?>", y: <?php echo $chart->NumeroDeTatuajes;?> },
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chart6", {
                animationEnabled: true,
                theme: "dark1", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Las 5 tecnicas que se tatuan mas"
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##",
                    dataPoints: [
                        <?php foreach ($chartD6 as $chart):?>
                        { label: "<?php echo $chart->Tecnica;?>", y: <?php echo $chart->NumTatuajes;?> },
                        <?php endforeach; ?>
                    ]
                }]
            });
            chart.render();

        }
    </script>

    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../plugins//DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/agendaAdmin.js"></script>


    <script src="../plugins/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- AdminLTE App -->
    <script src="../assets/js/adminlte.min.js"></script>
</body>

</html>