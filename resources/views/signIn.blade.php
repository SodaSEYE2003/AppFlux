
<!--<html>
    <head>
        <title>Page de connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/style1.css">
        
        <script src="JS/Vendors/jquery.min.js"></script>
    </head>

    <body>
        
        <section id="main">
            <div class="titleBox">
                <h1>De Retour</h1>
                <p>Connectez-vous</p>
            </div>
            <form id="loginForm" action="login.php" method="POST">
                <div class="inputBox">
                   
                    <input type="email" id="email" class="input">
                    <p class="inputName">E-MAIL</p>
                </div>
                <p class="errorMessage">Exemple d'erreur</p>

                <div class="inputBox">
                   
                    <input type="password" id="password" class="input">
                    <p class="inputName">MOT DE PASSE</p>
                </div>
                <p class="errorMessage"></p>

                <button type="submit" class="btn">SE CONNECTER</button>
                
                <div class="switchPage">
                    <p>Vous n'avez pas de compte ?</p>
                    <a href="signUp.html">Inscrivez-vous</a>
                </div>    
                <button class="btn"><a href="index.html">ANNULER</a></button>
            </form>
        </section>

         Script jQuery pour la vérification des informations d'identification 
        <script>
            $(document).ready(function(){
                $('#loginForm').submit(function(e){
                    e.preventDefault(); // Empêcher l'envoi du formulaire par défaut
                    var email = $('#email').val();
                    var password = $('#password').val();
                    // Vérifier si l'email et le mot de passe sont corrects
                    if (email === 'admin@gmail.com' && password === 'Passer2022') {
                        // Rediriger vers le tableau de bord de l'administrateur
                        window.location.href = 'Admin.html';
                    } else {
                        // Afficher un message d'erreur si les informations d'identification sont incorrectes
                        $('.errorMessage').text('Identifiants incorrects');
                    }
                });
            });
        </script>
    </body>
</html>-->
<!DOCTYPE html>
<html>
<head>
    <title>Page de Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/style1.css')}}">
    <style>
        /* Custom CSS */
        /* Add your custom styles here */
    </style>
</head>
<body>
    <section id="main">
        <div class="titleBox">
            <h1>De Retour</h1>
            <p>Connectez-vous</p>
        </div>
                   
                        <form id="loginForm">
                            <div class="inputBox">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <p class="inputName">E-mail</p>
                            </div>
                            <div class="inputBox">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <p class="inputName">MOT DE PASSE</p>
                            </div>
                            <button type="submit" class="btn">Se connecter</button>
<!--  <div class="switchPage">
                                <p>Vous n'avez pas de compte ?</p>
                                <a href="{{ route('signUp') }}">créer un compte</a>
                            </div>    
                            
                        </form>
                        <button class="btn" onclick="window.location.href='{{ route('home') }}'">ANNULER</button>
                        <div id="error" class="mt-3 text-danger"></div>--> 
                    
        
</section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#loginForm').submit(function(e){
            e.preventDefault(); // Empêcher l'envoi du formulaire par défaut
            
            var email = $('#email').val();
            var password = $('#password').val();
            
            // Vérification pour l'administrateur
            if (email === 'admin@gmail.com' && password === 'Passer2022') {
                // Redirection vers le tableau de bord de l'administrateur
                window.location.replace('{{ route('dashboard') }}');
            } else {
                // Vérification pour les analystes
                @if(isset($analystes) && $analystes->count() > 0)
                    @foreach($analystes as $analyste)
                        if (email === '{{ $analyste->Email }}' && password === '{{ $analyste->MotdePasse }}') {
                            window.location.replace('{{ route('dashboard') }}');
                        }
                    @endforeach
                @endif

                // Si aucun analyste correspondant n'est trouvé
                $('#error').text('Identifiants incorrects');
            }
        });
    });
</script>
    
</body>
</html>
