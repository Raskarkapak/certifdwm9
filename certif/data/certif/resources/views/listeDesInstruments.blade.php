<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des instruments</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/insertInstrument">Ajouter un instrument</a></li>
        </ul>
    </nav>
    <h1>Liste des instruments</h1>
    <table>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>Stock</th>
        </tr>
        @foreach ($instruments as $instrument)
            <tr>
                <td>{{$instrument->name}}</td>
                <td>{{$instrument->price}}</td>
                <td>{{$instrument->stock}}</td>
                
                <td>{{--}} faire un foreach pour la relation many to many plus tard {{--}}</td>    
                
            </tr>
        @endforeach
    </table>
</body>
</html>