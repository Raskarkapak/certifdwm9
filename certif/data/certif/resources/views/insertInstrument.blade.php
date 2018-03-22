<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un instrument au magasin</title>
</head>
<body>
    <h1>Ajout</h1>
    {!! Form::open(['url' => 'insertOneInstrument']) !!}
    {{  Form::text('name', 'Nom du produit' )}} 
    {{--}} A rajouter plus tard , faire un select pour le type{{--}}
    {{  Form::text('price', 'Prix' )}}
    {{  Form::text('stock', 'Quantité' )}}
    {{  Form::submit('Ajouter au magasin')}}
    {!! Form::close() !!}
</body>
</html>