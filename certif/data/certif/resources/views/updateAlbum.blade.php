@extends('layouts.base')
@section('main')
    <h1>Coucou ! mise a jour</h1>
    {!! Form::open(['url' => '/updateOneAlbum']) !!}
    {{ Form::hidden('id', $album->id)}}
    {!! Form::text('title', $album->title) !!}
    {!! Form::text('artist', $album->artist) !!}
    {!! Form::text('price', $album->price) !!}
    {!! Form::text('stock', $album->stock) !!}
    {!! Form::submit('Mettre à jour') !!}
    {!! Form::close() !!}
@endsection