<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPDATE</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">MODIFIER COMPTE</h1>
                            </div>
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
                            <form action="/update/traitement" method="POST" class="user">
                                @csrf
                                <input type="text" name="id" style="display: none;" value="{{ $analystes->id }}">
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input  type="text" class="form-control-user @error('Nom')is-invalid @enderror" id="exampleInputName" placeholder="Nom" name="Nom" value="{{ $analystes->Nom}}">
                                   @error('Nom')
                                        <span class="invalid-feedback">{{message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                <input  type="text" class="form-control-user @error('Prenom')is-invalid @enderror" id="exampleInputName" placeholder="Prenom" name="Prenom" value="{{ $analystes->Prenom}}">
                                   @error('Prenom')
                                        <span class="invalid-feedback">{{message}}</span>
                                    @enderror
                                </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name ="Email" type="email" class="form-control-user @error('Email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email" value="{{ $analystes->Email}}">
                               @error('Email')
                                    <span class="invalid-feedback">{{message}}</span>
                                @enderror
                                 </div>
                                 <div class="col-sm-6">
                                <input  type="password" class="form-control-user @error('MotdePasse')is-invalid @enderror" id="exampleInputPassword" placeholder="Mot de passe" name="MotdePasse"  value="{{ $analystes->MotdePasse}}">
                                   @error('MotdePasse')
                                        <span class="invalid-feedback">{{message}}</span>
                                    @enderror
                                </div>
                                 
                                    </div>
                                    
                                <button type="submit" class="btn btn-primary btn-user btn-block">Modifier ce compte</button>
                                <hr>
                                <button type="submit" class="btn btn-primary btn-user btn-block"><a class="small" href="/TableAnalyste"></a>Revenir à la liste des analystes!</button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_assets/js/sb-admin-2.min.js')}}"></script>
    <script>

    </script>

</body>

</html>