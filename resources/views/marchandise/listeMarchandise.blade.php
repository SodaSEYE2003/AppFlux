<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    
    <title>Administrateur</title>
</head>
<body>
        
       <div class="container text-center">
        <div class="row">
            <div class="col s12">
            <h1>La liste des marchandises</h1>
            <hr>
                <a href="/ajouterMarchandise" class="btn btn-primary">Ajouter une marchandise</a>
                <hr>
                @if(session('status')) 
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                 @endif
                 <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Produit</th>
                            <th>Description</th>
                            <th>Annee</th>
                            <th>Pays</th>
                            <th>Type de Flux</th>
                            <th>Quantite</th>
                            <th>Valeur (USD)</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($marchandises as $Marchandises)
                        <tr>
                            <td>{{$Marchandises->name}}</td>
                            <td>{{$Marchandises->description}}</td>
                            <td>{{$Marchandises->annee}}</td>
                            <td>{{$Marchandises->pays}}</td>
                            <td>{{$Marchandises->TypedeFlux}}</td>
                            <td>{{$Marchandises->quantite}}</td>
                            <td>{{$Marchandises->valeur}}</td>
                            <td>
                                <a href="/update_marchandise/{{$Marchandises->id}}" class="btn btn-info">Modifier</a>
                                <a href="/delete_marchandise/{{$Marchandises->id}}" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach   
                        
                    </tbody>
                 </table>
            </div>
        </div>
       </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/main.js') }}"></script>
</body>
</html>
