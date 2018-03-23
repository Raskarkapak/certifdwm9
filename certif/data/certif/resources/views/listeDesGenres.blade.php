@extends('layouts.base')
@section('main')
    <h1 class="LEH1">Liste des genres</h1>
    <table>
        <tr>
            <th>Genre</th>
            <th>Supprimer</th>
        </tr>
        @foreach ($genres as $genre)
            <tr>
                <td>{{$genre->genre}}</td>
                <td>
                    {{ Form::open(['url' => '/deleteOneGenre'])}}
                    {{ Form::hidden('id', $genre->id) }}
                    {{ Form::submit('supprimer') }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
@section('main2')

<h1 class="LEH1">Ajouter un genre</h1>
<table>
    <th>Genre</th>
<tr>
        {!! Form::open(['url' => '/insertOneGenre']) !!}
    <td>{!! Form::text('genre') !!}</td>
</tr>
<tr>
    <td class="submit2">{!! Form::submit('Ajouter un Genre') !!}</td>
        {!! Form::close() !!}
</tr>
</table>
@endsection