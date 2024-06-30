<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('CSS copy/styleResults.css')}}">
</head>
<body>
    <div class="container">
    
    
    @php
    $marchandisesAffichees = [];
@endphp

@foreach($results as $result)
    @if(!in_array($result->marchandise->name ?? 'Produit non trouvé', $marchandisesAffichees))
    <img src="./produits/{{ strtolower($result->marchandise->name) }}.jpeg" class="img-title" alt="">
        <h1>
            @if($result->marchandise)
                {{ $result->marchandise->name }} 
            @else
                Produit non trouvé
            @endif
        </h1>
@switch($result->marchandise->name)
    @case('Machines et equipements')
        <p>Les importations de ce produit au Sénégal sont essentielles pour moderniser les infrastructures et stimuler la croissance économique. Elles soutiennent l'industrie manufacturière, l'agriculture mécanisée et améliorent les capacités de production, contribuant ainsi à créer des emplois et à renforcer les partenariats internationaux pour le développement technologique durable.</p>
        @break

    @case('Petrole brut')
        <p>Les importations de pétrole brut au Sénégal sont cruciales pour répondre à la demande énergétique nationale. En tant que ressource principale pour le secteur énergétique, le pétrole brut importé soutient la production d'électricité, les besoins en carburants et autres utilisations industrielles. Ces importations jouent un rôle vital dans l'économie sénégalaise en assurant un approvisionnement constant en énergie nécessaire à la croissance économique et au développement industriel du pays.</p>
        @break
    
    @case('Vehicules')
        <p>Les importations de véhicules au Sénégal sont essentielles pour soutenir les besoins de transport individuel, commercial et public. Ces importations couvrent une gamme variée de véhicules, allant des voitures particulières aux camions de transport, en passant par les bus et les motos, contribuant ainsi à la mobilité et à l'accessibilité dans tout le pays. Elles jouent un rôle crucial dans le développement économique en facilitant le commerce, en améliorant les infrastructures de transport et en soutenant les services de transport en commun. De plus, les véhicules importés contribuent à la création d'emplois dans les secteurs de la distribution, de l'entretien et de la réparation automobile, tout en favorisant la modernisation du parc automobile sénégalais.</p>
         @break

    @case('Produits Pharmaceutiques')
        <p>Les importations de produits pharmaceutiques au Sénégal sont essentielles pour garantir l'accès aux médicaments et aux produits de santé nécessaires à la population. Ces importations couvrent une large gamme de médicaments, de dispositifs médicaux et de produits de santé essentiels utilisés dans les soins préventifs, curatifs et palliatifs. En soutenant le système de santé du pays, ces importations jouent un rôle crucial dans la gestion des maladies, la promotion du bien-être et la lutte contre les épidémies. Elles contribuent également à stimuler l'innovation médicale et à renforcer les capacités locales en matière de santé publique et de soins médicaux.</p>
        @break
    @case('Riz')
        <p>Les importations de riz au Sénégal jouent un rôle crucial dans l'alimentation nationale en fournissant une source de base essentielle de glucides pour la population. Le riz importé est largement consommé dans les repas quotidiens à travers le pays, contribuant ainsi à la sécurité alimentaire en assurant un approvisionnement régulier et diversifié. En plus de répondre aux besoins nutritionnels fondamentaux, ces importations soutiennent également l'économie en stimulant le commerce agricole et en offrant des opportunités pour le développement économique local dans les secteurs liés à la production, à la distribution et à la vente de riz.</p>
        @break
    @case('blé')
        <p>Les importations de blé au Sénégal sont cruciales pour répondre à la demande nationale en matière de production alimentaire. Utilisé principalement dans la fabrication de pain, de pâtisseries et d'autres produits de boulangerie, le blé importé soutient l'industrie alimentaire et contribue à la sécurité alimentaire du pays. En fournissant une source de glucides essentiels dans l'alimentation quotidienne, ces importations jouent un rôle stratégique en assurant un approvisionnement stable et fiable pour répondre aux besoins nutritionnels de la population sénégalaise.</p>
        @break
    @case('Sucre')
        <p>Les importations de sucre au Sénégal sont essentielles pour répondre à la demande nationale en tant qu'élément clé de l'alimentation quotidienne et de l'industrie agroalimentaire. Utilisé dans la préparation des aliments et des boissons, ainsi que dans la fabrication de produits alimentaires transformés, le sucre importé contribue à la sécurité alimentaire en assurant un approvisionnement stable et diversifié pour la population. Ces importations jouent un rôle vital dans l'économie sénégalaise en soutenant la production alimentaire locale et en stimulant le commerce et l'industrie associés au secteur sucrier.</p>
        @break
    @case('Huiles Végétales')
        <p>Les importations d'huiles végétales jouent un rôle crucial dans l'alimentation et l'industrie au Sénégal. Utilisées principalement dans la cuisine domestique et commerciale, ainsi que dans la production alimentaire et cosmétique, ces huiles constituent une source essentielle de matières premières et de nutriments pour la population. En soutenant la diversité alimentaire et en contribuant à l'industrie agroalimentaire, les importations d'huiles végétales favorisent également la sécurité alimentaire et économique du pays, tout en offrant des possibilités d'innovation dans le secteur des produits de consommation.</p>
        @break
    @case('Produits chimiques')
        <p>Les importations de produits chimiques au Sénégal sont vitales pour plusieurs secteurs économiques clés. Ces produits chimiques sont utilisés dans l'agriculture pour les fertilisants et les pesticides, dans l'industrie pour la fabrication de divers produits manufacturés, et dans le secteur de la santé pour les médicaments et les produits pharmaceutiques. En soutenant ces industries, les importations de produits chimiques contribuent à augmenter la productivité agricole, à stimuler la production industrielle et à améliorer les soins de santé dans le pays. Elles représentent également une opportunité pour le Sénégal de diversifier son économie et d'encourager l'innovation technologique dans l'utilisation des produits chimiques.</p>
        @break
    @case('Produits Chimiques')
        <p>Les importations de produits chimiques au Sénégal sont vitales pour plusieurs secteurs économiques clés. Ces produits chimiques sont utilisés dans l'agriculture pour les fertilisants et les pesticides, dans l'industrie pour la fabrication de divers produits manufacturés, et dans le secteur de la santé pour les médicaments et les produits pharmaceutiques. En soutenant ces industries, les importations de produits chimiques contribuent à augmenter la productivité agricole, à stimuler la production industrielle et à améliorer les soins de santé dans le pays. Elles représentent également une opportunité pour le Sénégal de diversifier son économie et d'encourager l'innovation technologique dans l'utilisation des produits chimiques.</p>
        @break
    @case('Ciments')
        <p>Les importations de ciment au Sénégal sont stratégiques pour répondre à la demande croissante en matériaux de construction essentiels. En tant que composant clé dans l'industrie de la construction, le ciment importé contribue à la réalisation d'infrastructures essentielles telles que les routes, les bâtiments et les ouvrages d'art. Ces importations jouent un rôle crucial dans le soutien de l'économie locale en stimulant le secteur de la construction, en créant des emplois dans le domaine et en renforçant les capacités de développement urbain et rural à travers le pays.</p>
        @break
    @case('Arachides')
        <p> Les exportations d'arachides du Sénégal jouent un rôle significatif dans l'économie agricole du pays. Le Sénégal est l'un des principaux producteurs d'arachides en Afrique de l'Ouest, exportant principalement vers des destinations internationales pour une utilisation dans l'industrie alimentaire et la production d'huile.</p>
        @break
    @case('Poissons et Fruits de mer')
        <p> Les exportations de poissons et de fruits de mer du Sénégal représentent une part importante de l'économie maritime du pays. Le Sénégal exporte une variété de poissons, crustacés et mollusques vers des marchés internationaux, profitant de ses vastes ressources halieutiques en Atlantique.</p>
        @break
    @case('Or')
        <p>Les exportations d'or du Sénégal sont une composante clé de son secteur minier. L'or extrait est exporté principalement pour la vente sur les marchés internationaux, contribuant ainsi aux revenus du gouvernement et à l'économie nationale.</p>
        @break
    @case('Produits Textiles')
        <p> Les exportations de produits textiles du Sénégal sont principalement constituées de tissus et d'articles de mode traditionnels. Ces exportations contribuent à la promotion de l'artisanat local et à l'essor de petites entreprises dans le secteur textile.</p>
        @break
    @case('Coton')
        <p>Les exportations de coton du Sénégal sont importantes pour son agriculture. Le coton sénégalais est exporté principalement vers des marchés internationaux où il est utilisé dans l'industrie textile pour la production de vêtements et d'autres produits.</p>
        @break
    @case('Cuivre')
        <p>Bien que le Sénégal ne soit pas un producteur majeur de cuivre, les exportations de ce métal contribuent à ses revenus d'exportation, provenant principalement de l'exploitation minière et des transactions commerciales internationales.</p>
        @break
    @case('Engrais')
        <p> Les exportations d'engrais du Sénégal soutiennent l'agriculture nationale et régionale en fournissant des produits essentiels pour améliorer la fertilité des sols et augmenter la production agricole.</p>
        @break
    @case('Fruits et légumes')
        <p> Les exportations de fruits et légumes du Sénégal incluent une variété de produits frais destinés aux marchés internationaux. Ces exportations stimulent l'agriculture locale et fournissent des produits alimentaires de haute qualité à l'échelle mondiale.</p>
        @break
    @default
        <p>Aucune description disponible pour {{ $result->marchandise->name }}</p>
 @endswitch
        @php
            $marchandisesAffichees[] = $result->marchandise->name ?? 'Produit non trouvé';
        @endphp
    </div>
   
    <div class="chart-container" >
        <div class="chart-content">
            <canvas id="barCanvas" aria-label="chart" role="img" width="300" height="300"></canvas>
        </div>
        <div class="chart-content">
            <canvas id="pieCanvas" aria-label="chart" role="img" width="300" height="300"></canvas>
        </div>
        @endif 
        </div>
        <div class="flag-container">
            <div class="flag-img">
            @if($flux == 'import')
                <h2>{{ $result->country_origin }}</h2>
            @else
                <h2>{{ $result->main_destinations }}</h2>
            @endif
            @if($flux == 'import')
                <img src="./drapeau/{{ strtolower($result->country_origin) }}.jpeg" class="img-fluid flag-image" alt="Image de {{ $result->country_origin }}">
            @endif
            @if($flux != 'import')
                <img src="./drapeau/{{ strtolower($result->main_destinations) }}.jpeg" class="img-fluid flag-image" alt="Image de {{ $result->main_destinations }}">
            @endif
            </div>
         
            <div class="flag-content">
           
            <p>Quantité: {{ $result->quantity }} tonnes</p>
            <p>Valeur: {{ $result->value }} USD</p>
            <p>Date de départ: {{ $result->departure_date }}</p>
            <p>Date d'arrivée: {{ $result->arrival_date }}</p>
            @if($flux == 'import')
                <p>Pays d'origine: {{ $result->country_origin }}</p>
            @else
                <p>Destinations principales: {{ $result->main_destinations }}</p>
            @endif
            </div>
       
      
    </div>
   
   
</div>


        </div>
  
@endforeach
</div>



        <!-- Ajouter le graphique -->
        
    </div>
    @php
$labels = $results->map(function($result) use ($flux) {
    return $flux == 'import' ? $result->country_origin : $result->main_destinations;
});
@endphp
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script class="diag">
        const barCanvas = document.getElementById('barCanvas');
        const barChart = new Chart(barCanvas, {
            type: 'bar',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'Quantité (tonnes ou unités)',
                    data: @json($results->pluck('quantity')),
                    backgroundColor :[
                        "crimson",
                        "lightgreen",
                        "lightblue",   
                    ]
                    
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    },
                    y: {
                        size: 18
                    },

                }
            }
        });
        </script>
        <script>
        const pieCanvas = document.getElementById('pieCanvas');
        const pieChart = new Chart(pieCanvas, {
            type: 'pie',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'value (millions$)',
                    data: @json($results->pluck('quantity')),
                    backgroundColor :[
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',  
                    ],
                    hoverOffset: 4
                }]
            }
        });
    </script>
    
</body>
</html>
