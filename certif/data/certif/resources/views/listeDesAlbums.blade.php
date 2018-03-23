@extends('layouts.base')
@section('main')
    <h1>Liste des albums</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Artiste</th>
         
            <th>Prix</th>
            <th>Stock</th>
            <th>Supprimer</th>
            <th>Modifier</th>
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
@endsection
@section('main2')
<h1>Ajouter un Album</h1>
<table>
    <tr>
        <th>Titre</th>
        <th>Artiste</th>
     
        <th>Prix</th>
        <th>Stock</th>
    </tr>
     <tr>
            {!! Form::open(['url' => 'insertOneAlbum']) !!}
        <td>{{  Form::text('title', 'titre de l\'album' )}} </td>
        <td>{{  Form::text('artist', 'Nom de l\'artiste' )}} </td>
            {{--}}{!! Form::select('genres[]', $genresArray, null, ['multiple' => 'multiple']) !!} {{--}}
        <td>{{  Form::text('price', 'Prix' )}}</td> 
        <td>{{  Form::text('stock', 'Quantité' )}}</td> 
        <td>{{  Form::submit('Ajouter au magasin')}}</td>            {!! Form::close() !!}
    </tr>
</table>
@endsection