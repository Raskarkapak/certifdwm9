<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des albums</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/listeDesInstruments">Voir les instruments</a></li>
        </ul>
    </nav>
    <h1>Liste des albums</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Artiste</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Suppression</th>
        </tr>
        @foreach ($albums as $album)
            <tr>
                <td>{{$album->title}}</td>
                <td>{{$album->artist}}</td>
                <td>{{$album->price}}</td>
                <td>{{$album->stock}}</td>
                <td>
                    {{ Form::open(['url' => '/deleteOneAlbum'])}}
                    {{ Form::hidden('id', $album->id) }}
                    {{ Form::submit('X') }}
                    {{ Form::close() }}
                </td>
                <td>
                        {!! Form::open(['url' => '/updateAlbum'])!!}
                        {!! Form::hidden('id', $album->id) !!}
                        {!! Form::submit('U')!!}
                        {!! Form::close()!!}
                </td>  
           
                
            </tr>
        @endforeach
    </table>
</body>
</html>