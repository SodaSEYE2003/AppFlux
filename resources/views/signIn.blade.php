
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
    <link rel="stylesheet" href="CSS/Vendors/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/style1.css">
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
                            <div class="switchPage">
                                <p>Vous n'avez pas de compte ?</p>
                                <a href="signUp.html">Inscrivez-vous</a>
                            </div>    
                            <button class="btn"><a href="index.html">ANNULER</a></button>
                        </form>
                        <div id="error" class="mt-3 text-danger"></div>
                    
        
</section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            // Submit form
            $('#loginForm').submit(function(e){
                e.preventDefault();
                var email = $('#email').val();
                var password = $('#password').val();
                var userType = $('#userType').val();

                        if(email === 'admin@gmail.com' && password === 'Passer2022'){
                            // Redirect to admin dashboard
                            window.location.replace('Admin.html');
                        } else {
                            $('#error').text('Identifiants administrateur incorrects');
                        }
                    });
            });
     
    </script>
</body>
</html>
