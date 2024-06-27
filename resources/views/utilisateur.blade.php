<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="CSS/styleUser.css">
    <title>Gestion des users</title>
  </head>
  <body>
    <h1>Gestion des utilisateurs</h1>
    <form>
      <input type="text" placeholder="Nom" autocomplete="off" id="nom" />
      <input type="text" placeholder="Prénom" autocomplete="off" id="prenom" />
      <input type="text" placeholder="Age" autocomplete="off" id="age" />
      <input type="text" placeholder="type d'utilisateur" autocomplete="off" id="utilisateur" />
      <button id="valider">Ajouter</button>
    </form>
    <div id="allUsers"></div>

    <script src="JS/Vendors/jquery.min.js"></script>
    <script src="JS/Vendors/bootstrap.min.js"></script>
    <script src="JS/main.js"></script>
  </body>
</html>
