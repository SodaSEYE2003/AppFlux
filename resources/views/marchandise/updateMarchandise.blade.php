<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    
    <title>Marchandise</title>
</head>
<body>
        
       <div class="container ">
        <div class="row">
            <div class="col s12">
            <h1>MODIFIER UNE MARCHANDISE</h1>
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
            <form action="/updateMarchandise/traitement" method="POST" class=form-group>
                @csrf
                <input type="text" name="id" style="display: none;" value="{{ $marchandises->id }}">
                <div class="form-group">
                    <label for="name">Produit</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $marchandises->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $marchandises->description }}">
                </div> 
                <div class="form-group">
                <label for="annee">Année</label>
                <input type="text" class="form-control" id="annee" name="annee" value="{{ $marchandises->annee}}">
                </div>
                <div class="form-group">
                    <label for="TypedeFlux" class="form-label">Type de Flux</label>
                    <input type="text" class="form-control" id="TypedeFlux" name="TypedeFlux" value="{{ $marchandises->TypedeFlux}}">
                </div>
                <div class="form-group">
                    <label for="quantite" class="form-label">Quantite</label>
                    <input type="text" class="form-control" id="quantite" name="quantite" value="{{ $marchandises->quantite }}">
                </div>
                <div class="form-group">
                    <label for="valeur" class="form-label">Valeur USD</label>
                    <input type="text" class="form-control" id="valeur" name="valeur" value="{{ $marchandises->valeur }}">
                </div>
                <div class="form-group">
                    <label for="pays" class="form-label">Pays</label>
                    <input type="text" class="form-control" id="pays" name="pays" value="{{ $marchandises->pays }}">
                </div>
        <br>
                <button type="submit" class="btn btn-primary">modifier la marchandise</button>
                <br>
                <br>
                <a href="/marchandise" class="btn btn-danger">Revenir à la liste des marchandises</a>
            </form>
            </div>
        </div>
       </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/main.js') }}"></script>
</body>
</html>
