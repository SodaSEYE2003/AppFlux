<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    
    <title>Analyste</title>
</head>
<body>
        
       <div class="container ">
        <div class="row">
            <div class="col s12">
            <h1>AJOUTER UN ANALYSTE</h1>
            <hr>
              @if(session('status')) 
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif
             <ul>
                @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
             </ul>
            <form action="/ajouter/traitement" method="POST" class=form-group>
                @csrf
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="Nom" >
                </div>
                <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="Prenom">
                </div> 
                <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" name="Email">
                </div>
                <div class="form-group">
                    <label for="MotdePasse" class="form-label">Mot de Passe</label>
                    <input type="text" class="form-control" id="MotdePasse" name="MotdePasse">
                </div>
        <br>
                <button type="submit" class="btn btn-primary">Ajouter un analyste</button>
                <br>
                <br>
                <a href="/analyste" class="btn btn-danger">Revenir à la liste des analystes</a>
            </form>
            </div>
        </div>
       </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/main.js') }}"></script>
</body>
</html>
