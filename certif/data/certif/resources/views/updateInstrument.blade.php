@extends('layouts.base')
@section('main')
<body>
    <h1>Coucou ! mise a jour</h1>
    {!! Form::open(['url' => '/updateOneInstrument']) !!}
    {{ Form::hidden('id', $instrument->id)}}
    {!! Form::text('name', $instrument->name) !!}
    {!! Form::text('price', $instrument->price) !!}
    {!! Form::text('stock', $instrument->stock) !!}
    {!! Form::submit('Mettre à jour') !!}
    {!! Form::close() !!}
@endsection