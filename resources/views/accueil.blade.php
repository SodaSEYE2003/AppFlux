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
        <div class="container">
            <div class="row">
                 <!--Bars icon-->
                 <i class="icon fa fa-bars fa-2x"></i>
                 
                <!--Logo-->
                <div class="col-md-3 col-xs-12">
                    <div class="logo">
                        <h2>TransTrack</h2>
                    </div>
                </div>
                <!--Nav-->
                <nav class="col-md-9 col-xs-12">
                    <ul class="nav-list">
                        <li class="list"><a href="#">Suivi en temps réel</a></li>
                        <li class="list"><a href="#">Ressources</a></li>
                        <li class="list"><a href="#">Support Client</a></li>
                        <li class="list"><a href="#">Contact</a></li>
                        <button class="btn button" onclick="window.location.href='{{ route('signUp') }}'">Connexion</button>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--/Header-->

    <!--Home-->
    <section class="sections home text-center">
        <div class="overlay">
            <div class="container">
                <div class="home-content">
                    <div class="text-content">
                        <h3 class="home-title text-center">Optimisez la gestion des flux de marchandises import-export grâce à nos solutions innovantes de traitement et de visualisation de données.</h3>
                    </div>
                </div>
                             <di class="search-bar">
                                <form action="{{ route('search') }}" method="POST" id="searchForm">
                                    @csrf
                                    <div class="barbar">
                                        <label for="flux" class="content ml-auto">Choisir un flux :</label>
                                        <select class="form-control" id="flux" name="flux">
                                            <option value="import">Import</option>
                                            <option value="export">Export</option>
                                        </select>
                                    </div>
                                    <div class="barbar">
                                        <label for="marchandise" class="content ml-auto">Entrer un produit :</label>
                                        <select class="form-control" id="marchandise" name="marchandises_id">
                                            <!-- Options des produits seront chargées dynamiquement par jQuery -->
                                        </select>
                                    </div>
                                    <div class="barbar">
                                        <button type="submit">Rechercher</button>
                                    </div>
                                </form>
                            </div>
            </div>
        </div>
    </section>

    <!--About-->
    <section class="sections about">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Suivi en temps réel</h2>
                <div class="line"><span></span></div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, quis perspiciatis possimus ea explicabo odio hic rerum neque sed doloremque nesciunt! Voluptatibus beatae ea ducimus incidunt temporibus perspiciatis ad similique.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-info">
                        <h3>Welcome to <span>Import-Export</span></h3>
                        <p class="about-info-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consequuntur tenetur, suscipit cumque voluptas fuga recusandae, odit, voluptatem placeat veritatis sint sequi dolor reiciendis? Omnis dolore repudiandae reprehenderit nihil dolorum. Suscipit ea quo tempora! Rem, facere, facilis deserunt consectetur labore deleniti illum necessitatibus commodi porro veniam sint repellat aspernatur! Sunt aliquid quibusdam necessitatibus soluta fugiat, quos temporibus doloremque possimus et eum, libero quam numquam porro laboriosam in esse nisi cupiditate facilis ipsum maxime explicabo officiis.
                        </p>
                        <button class="about-info-btn">En savoir plus</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="Images/About/image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="sections services">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Ressources</h2>
                <div class="line"><span></span></div>
                <p>Ces ressources jouent un rôle crucial dans le soutien et la gestion efficace des opérations commerciales internationales. Elles sont essentielles pour aider les entreprises à naviguer dans les défis réglementaires, à optimiser leurs processus logistiques et à maximiser les opportunités de croissance sur les marchés mondiaux.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <i class="icon fa fa-camera fa-lg"></i>
                        <h3 class="serv-title">Données Statistiques</h3>
                        <p class="serv-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deleniti aperiam qui, vero ut hic!</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <i class="icon fa fa-camera fa-lg"></i>
                        <h3 class="serv-title">Guides Réglementaires</h3>
                        <p class="serv-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deleniti aperiam qui, vero ut hic!</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <i class="icon fa fa-camera fa-lg"></i>
                        <h3 class="serv-title">Outils de Suivi</h3>
                        <p class="serv-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deleniti aperiam qui, vero ut hic!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <i class="icon fa fa-camera fa-lg"></i>
                        <h3 class="serv-title">Formulaires et Documents</h3>
                        <p class="serv-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deleniti aperiam qui, vero ut hic!</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <i class="icon fa fa-camera fa-lg"></i>
                        <h3 class="serv-title">Actualités et Analyses</h3>
                        <p class="serv-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deleniti aperiam qui, vero ut hic!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/main.js') }}"></script>
    <script>
   $(document).ready(function () {
    $('#flux').change(function () {
        var selectedFlux = $(this).val();
        var url = "{{ route('getProductsByFlux', ':flux') }}";
        url = url.replace(':flux', selectedFlux);

        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {
                console.log(response); // Ajoutez cette ligne pour inspecter la structure de la réponse
                $('#marchandise').empty();
                if (response.products && response.products.length) {
                    $.each(response.products, function (key, value) {
                        // Accédez directement aux propriétés id et name
                        if (value.id && value.name) {
                            $('#marchandise').append('<option value="' + value.id + '">' + value.name + '</option>');
                        }
                    });
                } else {
                    $('#marchandise').append('<option value="">Aucun produit trouvé</option>');
                }
            },
            error: function () {
                $('#marchandise').empty().append('<option value="">Erreur lors du chargement des produits</option>');
            }
        });
    });

    // Initialisation pour charger les produits au chargement de la page
    $('#flux').trigger('change');
});

</script>
</body>
</html>
