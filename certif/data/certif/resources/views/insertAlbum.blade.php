@extends('layouts.base')
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