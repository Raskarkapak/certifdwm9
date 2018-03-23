@extends('layouts.base')
@section('main2')

<h1>Ajouter un genre</h1>
{!! Form::open(['url' => '/insertOneGenre']) !!}
{!! Form::text('genre', 'Genre') !!}
{!! Form::submit('Ajouter un Genre') !!}
{!! Form::close() !!}


@endsection