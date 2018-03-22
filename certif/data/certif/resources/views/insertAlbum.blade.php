@extends('layouts.base')
@section('main')
            <h1>Ajout</h1>
            {!! Form::open(['url' => 'insertOneAlbum']) !!}
            {{  Form::text('title', 'titre de l\'album' )}} 
            {{  Form::text('artist', 'Nom de l\'artiste' )}} 
            
            {{  Form::text('price', 'Prix' )}}
            {{  Form::text('stock', 'Quantité' )}}
            {{  Form::submit('Ajouter au magasin')}}
            {!! Form::close() !!}
@endsection