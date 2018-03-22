<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un instrument</title>
</head>
<body>
    <h1>Coucou ! mise a jour</h1>
    {!! Form::open(['url' => '/updateOneInstrument']) !!}
    {{ Form::hidden('id', $instrument->id)}}
    {!! Form::text('name', $instrument->name) !!}
    {!! Form::text('prix', $instrument->price) !!}
    {!! Form::text('stock', $instrument->stock) !!}
    {!! Form::submit('Mettre à jour') !!}
    {!! Form::close() !!}
</body>
</html>