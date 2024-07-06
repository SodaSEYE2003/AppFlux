<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
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
    
</body>
</html>