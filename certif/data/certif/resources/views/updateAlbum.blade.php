@extends('layouts.base')
@section('main')
<table>
    <tr>
        <th>Titre</th>
        <th>Artiste</th>
         
        <th>Prix</th>
        <th>Stock</th>
    </tr>
    <tr>
        <h1 class="LEH1">Coucou ! mise a jour</h1>
        {!! Form::open(['url' => '/updateOneAlbum']) !!}
        {{ Form::hidden('id', $album->id)}}
        <td>{!! Form::text('title', $album->title) !!}</td>
        <td>{!! Form::text('artist', $album->artist) !!}</td>
        <td>{!! Form::text('price', $album->price) !!}</td>
        <td>{!! Form::text('stock', $album->stock) !!}</td>
    </tr>
    <tr>
        <td class="submit">{!! Form::submit('Mettre à jour') !!}</td>
        {!! Form::close() !!}
    </tr>
    
</table>
@endsection