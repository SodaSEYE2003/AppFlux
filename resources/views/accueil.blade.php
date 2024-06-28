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
                        <h3 class="home-title text-center">Optimisez la gestion de des flux de marchandises import-export grâce à nos solutions innovantes de traitement et de visualisation de données.</h3>
                    </div>
                </div>
                    <div class="search-bar">
                    <h1>Choisissez les critères</h1>
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product">Produit:</label>
                <select class="form-control" id="product" name="product_id">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="flux">Flux:</label>
                <select class="form-control" id="flux" name="flux">
                    <option value="import">Import</option>
                    <option value="export">Export</option>
                </select>
            </div>
            <div class="form-group">
                <label for="country">Pays:</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
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
       <section class="sections services">
        <div class="container">
            <div class="section-header text-center">
                 <h2 class="section-title">Ressources</h2>
                 <div class="line"><span></span></div>
                 <p>ces ressources jouent un rôle crucial dans le soutien et la gestion efficace des opérations commerciales internationales.
                     Elles sont essentielles pour aider les entreprises à naviguer dans les défis réglementaires,
                     à optimiser leurs processus logistiques et à maximiser les opportunités de croissance sur les marchés mondiaux.</p>
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
       </section>
       <div class="test"></div>

    <script src="JS/Vendors/jquery.min.js"></script>
    <script src="JS/Vendors/bootstrap.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>
