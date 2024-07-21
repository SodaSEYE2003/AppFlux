<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransTrack</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Trans</span>Track</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#Ressources">Ressources</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="login_btn" onclick="window.location.href='{{ route('signIn') }}'">Se connecter</button>
    </header>
    <!-- section Acceuil -->
     
    <section id="home">
        <div class="left">
        <h1>Bienvenue à la<span> Visualisation des Flux de Marchandises</span>
            <p>TransTrack offre une interface intuitive et des outils puissants pour analyser les mouvements commerciaux entre le Sénégal et le reste du monde. Grâce à des graphiques interactifs et des données détaillées, vous pouvez explorer les tendances d'importation <br> et d'exportation et obtenir des informations essentielles pour optimiser vos opérations. Plongez dans les données avec TransTrack et prenez des décisions éclairées pour votre entreprise.</p>
            
        </div>
        <div class="right">
            <img src="{{asset('Images/img1.png')}}">
        </div>
    </section>




    <!-- section vehicule -->

    <section id="Ressources">
        <h1 class="section_title">Ressources</h1>
        <div class="search">
        <form action="{{ route('liste') }}" method="GET" id="searchForm" class="cher">
            <div class="input-box">
                <span class="icon"><i class="fa fa-exchange"></i></span>
                <select class="form-control" id="flux" name="TypeFlux">
                    <option value="import">Importation</option>
                    <option value="export">Exportation</option>
                </select>
                <button type="submit" class="btn">Rechercher</button>
            </div>
        </form>
        </div>
        
        <div class="images">
            <h1>Classement des meilleurs pays selon la valeur totale d' importations et d'exportations de produits</h1>
            <ul>
                <li class="car">
                   <div>
                       <img src="{{asset('Images/car1.jpg')}}" alt="">
                   </div>
                   <span>RUSSIE</span>
                   <span class="prix">500.000.000$</span>
                   <a href="#">DE 2017 à 2023</a>
                </li>
                <li class="car">
                    <div>
                    <img src="{{asset('Images/car2.jpg')}}" alt="">
                    </div>
                    <span>ALLEMANGNE</span>
                    <span class="prix">300.000.000$</span>
                    <a href="#">DE 2017 à 2023</a>
                 </li>
                 <li class="car">
                    <div>
                    <img src="{{asset('Images/car3.jpg')}}" alt="">
                    </div>
                    <span>FRANCE</span>
                    <span class="prix">200.000.000$</span>
                    <a href="#">DE 2017 à 2023</a>
                 </li>
                 <li class="car">
                   <div>
                       <img src="{{asset('Images/car4.jpg')}}" alt="">
                   </div>
                   <span>ARGENTINE</span>
                   <span class="prix">200.000.000$</span>
                   <a href="#">DE 2017 à 2023</a>
                </li>
                <li class="car">
                   <div>
                       <img src="{{asset('Images/car5.jpg')}}" alt="">
                   </div>
                   <span>AFRIQUE DU SUD</span>
                   <span class="prix">200.000.000$</span>
                   <a href="#">DE 2017 à 2023</a>
                </li>
                <li class="car">
                   <div>
                       <img src="{{asset('Images/car6.jpg')}}" alt="">
                   </div>
                   <span>CHINE</span>
                   <span class="prix">150.000.000$</span>
                   <a href="#">DE 2017 à 2023</a>
                </li>
            </ul>
        </div>

    </section>

    <!-- section contact -->

    <section id="contact">
        <h1 class="section_title">Contact</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.871515715736!2d-17.473165784742137!3d14.716677889718804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173467511e8ab%3A0x1f2b31b0a55b1cf9!2sDakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sfr!4v1644955637071!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <form action="#">
                    <input type="text"placeholder="Nom">
                    <input type="email"placeholder="Adresse Mail">
                    <input type="text"placeholder="Objet">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </div>
    </section>
 

   

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
</body>
</html>