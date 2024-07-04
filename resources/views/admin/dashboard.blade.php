<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/Vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS copy/styleAdmin.css')}}">
    <title>Administrateur</title>
</head>
<body>
<div class="container mt-5">
    <h1>Tableau de Bord Admin</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Statistiques des Flux</h2>
            <p>Total des Quantités : {{ $totalQuantite }}</p>
            <p>Valeur Totale : {{ $totalValeur }}</p>
        </div>
        <div class="col-md-6">
            <canvas id="fluxChart"></canvas>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('JS/Vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('JS/scripts.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    const ctx = document.getElementById('fluxChart').getContext('2d');
    const fluxChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Quantité', 'Valeur'],
            datasets: [{
                label: 'Total',
                data: [{{ $totalQuantite }}, {{ $totalValeur }}],
                backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<table id="dataTable" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Année</th>
            <th>Quantité</th>
            <th>Valeur</th>
            <th>Pays</th>
        </tr>
    </thead>
    <tbody>
        @foreach($marchandises as $marchandise)
            <tr>
                <td>{{ $marchandise->name }}</td>
                <td>{{ $marchandise->description }}</td>
                <td>{{ $marchandise->annee }}</td>
                <td>{{ $marchandise->quantite }}</td>
                <td>{{ $marchandise->valeur }}</td>
                <td>{{ $marchandise->pays }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<div id="map" style="height: 400px;"></div>

<script>
    var map = L.map('map').setView([14.4974, -14.4524], 7); // Coordonées du Sénégal
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Ajouter des marqueurs pour les marchandises
    @foreach($marchandises as $marchandise)
        L.marker([{{ $marchandise->latitude }}, {{ $marchandise->longitude }}]).addTo(map)
            .bindPopup("Produit : {{ $marchandise->name }}<br>Quantité : {{ $marchandise->quantite }}");
    @endforeach
</script>


</body>
</html>