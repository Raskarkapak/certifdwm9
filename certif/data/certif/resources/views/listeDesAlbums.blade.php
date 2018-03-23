@extends('layouts.base')
@section('main')
    <h1 class="LEH1">Liste des albums</h1>
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
                    {{ Form::submit('supprimer') }}
                    {{ Form::close() }}
                </td>
                <td>
                    {!! Form::open(['url' => '/updateAlbum'])!!}
                    {!! Form::hidden('id', $album->id) !!}
                    {!! Form::submit('modifier')!!}
                    {!! Form::close()!!}
                </td>  
           
                
            </tr>
        @endforeach
    </table>
@endsection
@section('main2')
<h1 class="LEH1">Ajouter un Album</h1>
<table class="table2">
    <tr>
        <th>Titre</th>
        <th>Artiste</th>
     
        <th>Prix</th>
        <th>Stock</th>
    </tr>
     <tr>
            {!! Form::open(['url' => 'insertOneAlbum']) !!}
        <td>{{  Form::text('title')}} </td>
        <td>{{  Form::text('artist' )}} </td>
            {{--}}{!! Form::select('genres[]', $genresArray, null, ['multiple' => 'multiple']) !!} {{--}}
        <td>{{  Form::text('price')}}</td> 
        <td>{{  Form::text('stock' )}}</td>       
    </tr>  
    <tr>
            <td class="submit">{{  Form::submit('Ajouter au magasin')}}</td>   
            {!! Form::close() !!}   
    </tr>
</table>
@endsection