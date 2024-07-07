<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/style.css')}}">
    <title>Document</title>
</head>
<body>
    <!--Header-->
    <header>
        <h2 class="logo">TransTrack</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup" onclick="window.location.href='{{ route('signIn') }}'">se connecter</button>
        </nav>
        
    </header>
    <div class="content">
    <h1>Bienvenue à la<span> Visualisation des Flux de Marchandises</span> <br> Découvrez et Analysez les Mouvements Commerciaux en Un Coup d'Œil!</h1>
    <p class="par">TransTrack offre une interface intuitive et des outils puissants pour analyser les mouvements commerciaux entre le Sénégal et le reste du monde. Grâce à des graphiques interactifs et des données détaillées, vous pouvez explorer les tendances d'importation <br> et d'exportation et obtenir des informations essentielles pour optimiser vos opérations. Plongez dans les données avec TransTrack et prenez des décisions éclairées pour votre entreprise.</p>
    <button class="cn"><a href="#">à propos de nous</a></button>
    </div>
    <div class="wrapper">
        <div class="form-box login">
            <h2>TransTrack</h2>
            <form action="{{ route('liste') }}" method="GET" id="searchForm">
                <div class="input-box">
                    <span class="icon"><i class="fa fa-exchange"></i></span>
                    <label for="flux" class="content ml-auto">Choisir un flux :</label>
                    <select class="form-control" id="flux" name="TypeFlux">
                        <option value="import">Importation</option>
                        <option value="export">Exportation</option>
                    </select>
                </div>
                <button type="submit" class="btn">Rechercher</button>
            </form>
        </div>
    </div>

    <!--Home-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/main.js') }}"></script>
</body>
</html>
