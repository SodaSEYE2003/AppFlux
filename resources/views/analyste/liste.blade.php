<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    
    <title>Analyste</title>
</head>
<body>
        
       <div class="container text-center">
        <div class="row">
            <div class="col s12">
            <h1>La liste des analystes</h1>
            <hr>
                <a href="/ajouter" class="btn btn-primary">Ajouter un analyste</a>
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
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>MotdePasse</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($analystes as $Analystes)
                        <tr>
                            <td>{{$Analystes->id}}</td>
                            <td>{{$Analystes->Prenom}}</td>
                            <td>{{$Analystes->Nom}}</td>
                            <td>{{$Analystes->Email}}</td>
                            <td>{{$Analystes->MotdePasse}}</td>
                            <td>
                                <a href="/update_analyste/{{$Analystes->id}}" class="btn btn-info">Modifier</a>
                                <a href="/delete_analyste/{{$Analystes->id}}" class="btn btn-danger">Supprimer</a>
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
