@extends('layouts.base')
@section('main')
    <h1>Ajout</h1>
    {!! Form::open(['url' => 'insertOneInstrument']) !!}
    {{  Form::text('name', 'Nom du produit' )}} 
    
    {{  Form::text('price', 'Prix' )}}
    {{  Form::text('stock', 'Quantité' )}}
    {{  Form::submit('Ajouter au magasin')}}
    {!! Form::close() !!}
@endsection