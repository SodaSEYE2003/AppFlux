<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Information sur les marchandises</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('admin_assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Trans Track</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href='{{route('home')}}'>Revenir à la page d'accueil</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <table >
                            <tr>
                                <th>
                                    Produit:
                                </th>
                                <th>
                                    Description:
                                </th>
                                <th>
                                    Quantité en tonnes:
                                </th>
                                <th>
                                    Valeur en millions:
                                </th>
                                <th>
                                    Type du flux:
                                </th>
                                <th>
                                    Pays:
                                </th>
                            </tr>
                    
                            @foreach ($produit as $p)
                            <tr>
                                <td> {{ $p->name}} </td>
                                <td> {{ $p->description}} </td>
                                <td> {{ $p->quantite}} </td>
                                <td> {{ $p->valeur}} </td>
                                <td> {{ $p->TypeFlux}} </td>
                                <td> {{ $p->pays}} </td>
                            </tr>    
                            @endforeach
                    
                            
                        </table>
                        
                    
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Merci d'avoir visité notre site</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('admin_assets/js/scripts.js')}}"></script>
    </body>
</html>
