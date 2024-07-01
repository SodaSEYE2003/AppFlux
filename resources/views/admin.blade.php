<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/styleAdmin.css')}}">
    <title>Administrateur</title>
</head>
<body>
        <div class="container">
            <div class="topbar">
                <div class="logo">
                    <h2>TransTrack</h2>
                </div>
            </div>
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-tachometer"></i>
                            <div>Tableau de bord</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-user"></i>
                            <div>Gestion Analyste</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-archive"></i>
                        <div>Gestion Marchandises</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fa fa-sign-out"></i>
                        <div>Deconnexion</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">1217</div>
                            <div class="card-name">Importations</div>
                        </div>
                            <div class="icon-box">
                            <i class="fa fa-arrow-circle-down"></i></div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">1217</div>
                            <div class="card-name">Importations</div>
                        </div>
                            <div class="icon-box">
                            <i class="fa fa-arrow-circle-down"></i></div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-content">
                            <div class="number">1217</div>
                            <div class="card-name">Importations</div>
                        </div>
                            <div class="icon-box">
                            <i class="fa fa-arrow-circle-down"></i></div>
                    </div>
                </div>
                <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1217</div>
                        <div class="card-name">Importations</div>
                    </div>
                        <div class="icon-box">
                        <i class="fa fa-arrow-circle-down"></i></div>
                </div>
                </div>
                <div class="charts"></div>
             </div>
        </div>

      
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/main.js') }}"></script>
</body>
</html>
