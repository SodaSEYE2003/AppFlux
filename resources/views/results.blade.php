<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Résultats pour {{ $flux }} de {{ $country }}</h1>
        @foreach($results as $result)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $result->product->name }}</h5>
                    <p class="card-text">Quantité: {{ $result->quantity }} tonnes</p>
                    <p class="card-text">Valeur: {{ $result->value }} USD</p>
                    <p class="card-text">Date de départ: {{ $result->departure_date }}</p>
                    <p class="card-text">Date d'arrivée: {{ $result->arrival_date }}</p>
                    @if($flux == 'export')
                        <p class="card-text">Destinations principales: {{ $result->main_destinations }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
