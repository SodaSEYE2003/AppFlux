<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/style1.css')}}">
    <title>page d'inscription</title>   
</head>

    <body>
        <section id="main">
            <div class="titleBox">
                <h1>Nouveau Compte</h1>
                <p>créer un nouveau compte</p>
            </div>

            <div class="inputBox">
                <input type="email" class="input">
                <p class="inputName">E-MAIL</p>
            </div>
            <p class="errorMessage"></p>

            <div class="inputBox">
                <input type="password" class="input">
                <p class="inputName">MOT DE PASSE</p>
            </div>
            <p class="errorMessage"></p>

            <div class="inputBox">
                <input type="password" class="input">
                <p class="inputName">CONFIRMER MDP</p>
            </div>
            <p class="errorMessage"></p>

            <button class="btn">S'INSCRIRE</button>

            <div class="switchPage">
                <p>vous avez déjà un compte ?</p>
                <a href="signIn.html">connectez-vous</a>
            </div>
        </div>
        
            <button class="btn"><a href="index.html">ANNULER</a></button>
        </section>
    </body>
</html>