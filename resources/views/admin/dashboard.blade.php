<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/styleAdmin.css')}}">
    <title>Administrateur</title>
</head>
<body id="page-top">
<!--
<div class="container mt-5">
    <h1>Tableau de Bord Admin</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Statistiques des Flux</h2>
            <p>Total des Quantités : {{ $totalQuantite }}</p>
            <p>Valeur Totale : {{ $totalValeur }}</p>
        </div>
        <div class="col-md-6">
            <canvas id="fluxChart"></canvas>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/scripts.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    const ctx = document.getElementById('fluxChart').getContext('2d');
    const fluxChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Quantité', 'Valeur'],
            datasets: [{
                label: 'Total',
                data: [{{ $totalQuantite }}, {{ $totalValeur }}],
                backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<table id="dataTable" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Année</th>
            <th>Quantité</th>
            <th>Valeur</th>
            <th>Pays</th>
        </tr>
    </thead>
    <tbody>
        @foreach($marchandises as $marchandise)
            <tr>
                <td>{{ $marchandise->name }}</td>
                <td>{{ $marchandise->description }}</td>
                <td>{{ $marchandise->annee }}</td>
                <td>{{ $marchandise->quantite }}</td>
                <td>{{ $marchandise->valeur }}</td>
                <td>{{ $marchandise->pays }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<div id="map" style="height: 400px;"></div>

<script>
    var map = L.map('map').setView([14.4974, -14.4524], 7); // Coordonées du Sénégal
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Ajouter des marqueurs pour les marchandises
    @foreach($marchandises as $marchandise)
        L.marker([{{ $marchandise->latitude }}, {{ $marchandise->longitude }}]).addTo(map)
            .bindPopup("Produit : {{ $marchandise->name }}<br>Quantité : {{ $marchandise->quantite }}");
    @endforeach
</script>
    <!--<div id="wrapper">
      <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0">
          <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            ...
          </a>
          <hr class="sidebar-divider my-0">
          <ul id="accordionSidebar" class="navbar-nav text-light">...</ul>
          <div class="text-center d-none d-md-inline">...</div>
        </div>
      </nav>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar">
            <div class="container-fluid">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" type="button">
                <i class="fas fa-bars"></i>
              </button>
              <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">...</form>
              <div class="input-group">
                <input class="bg-light form-control border-0 small" type="text" placeholder="Rechercher...">
                <div class="input-group-append">...</div>
                </div>
                <form></form>
                <ul class="navbar-nav flex-nowrap ml-auto">
                <li class="nav-item dropdown d-sm-none no-arrow">...</li>
                <li class="nav-item dropdown no-arrow mx-1">...</li>
                <li class="nav-item dropdown no-arrow mx-1">...</li>
                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
                        <span class="text-uppercase d-none d-lg-inline mr-2 text-gray-600 small" style="margin-right: 29px;margin-bottom: 15px;margin-top:8px ;padding-right:0px; padding-bottom:0px; margin-left:19px;">Administrateur</span>
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">...</div>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Tableau de Bord</h3>
        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#">...</a>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                <span>Quantité (tonnes ou unités)</span>
                            </div>
                            <div class="text-dark font-weight-bold h5 mb-0">
                                <span>40,000</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-archive fa fa-balance-scale" style="font-size: 24px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
    <div class="card shadow border-left-success py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                        <span>Valeur Totale (USD)</span>
                    </div>
                    <div class="text-dark font-weight-bold h5 mb-0">
                        <span>...</span>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fa fa-dollar fa-2x text-gray-300" style="font-size: 35px;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-3 mb-4">
    <div class="card shadow border-left-info py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
    <div class="col mr-2">
        <div class="text-uppercase text-info font-weight-bold text-xs mb-1">
            <span>Exportations</span>
        </div>
        <div class="row no-gutters align-items-center">
            <div class="col-auto">
                <div class="text-dark font-weight-bold h5 mb-0 mr-3">
                    <span>50%</span>
                </div>
            </div>
            <div class="col">
                <div class="progress progress-sm">
                    ...
                </div>
            </div>
        </div>
    </div>
    <div class="col-auto">
        <i class="fa fa-arrow-circle-up fa-2x text-gray-300"></i>
    </div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3 mb-4">
    <div class="card shadow border-left-warning py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="text-dark font-weight-bold h5 mb-0 mr-3"></div>
                        <span>38%</span>
                </div>
            </div>
                <div class="col">
                    <div class="progress progress-sm">...</div>
                </div>
        </div>
    </div>
    <div class="col-auto">
        <i class="fa fa-arrow-alt-circle-down fa-2x text-gray-300"></i>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-7 col-xl-8">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="text-primary font-weight-bold m-0">Représentations des quantités en fonction des pays</h6>
               <div class="dropdown no-arrow">
                <button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button">
                    <i class="fas fa-ellipsis-v text-gray-400"></i>
                </button>
                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"></div>
                    <p class="text-center deopdown-header">dropdown header:</p>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">.Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">.Something else here</a>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <canvas height="320" style="display:block; width:364px; height:320px;" width="364"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-5 col-xl-4">
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="text-primary font-weight-bold m-0">Représentation des valeurs des flux entrants et sortants </h6>
            <div class="dropdown no-arrow">
                <button class="btn btn-link btn-sm dropdown-toggle"aria-expanded="false" data-toggle="drpdown" type="button">
                    <i class="fas fa-ellipsis-v text-gray-400"></i>
                </button>
                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                <p class="text-center deopdown-header">dropdown header:</p>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">.Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">.Something else here</a>
                    <span class="dropdown-item-text">Text Item</span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <canvas height="320" style="display:block; width:241px; height:320px;" width="241"></canvas>
            </div>
            <div class="text-center small mt-4">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i>
                    .Direct
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-success"></i>
                    .Social
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-info"></i>
                    .Refferal
                </span>
            </div>
        </div>
    </div>
</div>
 <div class="row">
    <div class="col-lg--8 offset-lg-2 mb-4">
        <div class="card shadow mb-4"></div>
        <div class="card shadow mb-4"></div>
    </div>
 </div>
 </div>
</div>
<footer class="bg-white sticky-footer">
    <div class="container my-auto">
        <div class="text-center my-auto copyright"></div>
    </div>
</footer>
</div>
<a class="border rounded d-inline scroll-to-top"href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tableau de Bord Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">TransTrack</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Rechercher..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
<!-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestion Compte
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Ajouter Analyste</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Modifier Analyste</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Consulter marchandises
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
<!-- <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>-->
                            </div>
<!--<div class="sb-sidenav-menu-heading">Addons</div>-->
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
<!--   <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>-->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            
                        </div>
                    </div>
                </main>
               
            </div>
        </div>  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

</body>
</html>