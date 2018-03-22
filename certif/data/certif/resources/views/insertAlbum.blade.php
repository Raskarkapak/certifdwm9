<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un album</title>
</head>
<body>
        <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/insertInstrument">Ajouter un instrument</a></li>
                    
                </ul>
            </nav>
            <h1>Ajout</h1>
            {!! Form::open(['url' => 'insertOneAlbum']) !!}
            {{  Form::text('title', 'titre de l\'album' )}} 
            {{  Form::text('artist', 'Nom de l\'artiste' )}} 
            
            {{  Form::text('price', 'Prix' )}}
            {{  Form::text('stock', 'Quantité' )}}
            {{  Form::submit('Ajouter au magasin')}}
            {!! Form::close() !!}
</body>
</html>