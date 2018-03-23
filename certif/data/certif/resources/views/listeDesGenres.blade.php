@extends('layouts.base')
@section('main')
    <h1>Liste des genres</h1>
    <table>
        <tr>
            <th>Genre</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>
        @foreach ($genres as $genre)
            <tr>
                <td>{{$genre->genre}}</td>
                <td>
                    {{ Form::open(['url' => '/deleteOneGenre'])}}
                    {{ Form::hidden('id', $genre->id) }}
                    {{ Form::submit('X') }}
                    {{ Form::close() }}
                </td>
                <td>
                        {!! Form::open(['url' => '/updateGenre'])!!}
                        {!! Form::hidden('id', $genre->id) !!}
                        {!! Form::submit('U')!!}
                        {!! Form::close()!!}
                </td>  
           
                
            </tr>
        @endforeach
    </table>
@endsection
@section('main2')

<h1>Ajouter un genre</h1>
{!! Form::open(['url' => '/insertOneGenre']) !!}
{!! Form::text('genre', 'Genre') !!}
{!! Form::submit('Ajouter un Genre') !!}
{!! Form::close() !!}


@endsection