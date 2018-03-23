@extends('layouts.base')
@section('main2')
<table>
<tr>
        <th>Nom du produit</th>
        <th>Prix</th>
     
        <th>Stock</th>
        
</tr>
<tr>
        <h1>Ajouter un instrument</h1>
             {!! Form::open(['url' => 'insertOneInstrument']) !!}
        <td>  {{  Form::text('name', 'Nom du produit' )}}</td>
    
        <td>  {{  Form::text('price', 'Prix' )}}</td>  
        <td>  {{  Form::text('stock', 'Quantité' )}}</td>
        <td>  {{  Form::submit('Ajouter au magasin')}}</td>  
             {!! Form::close() !!}
    </tr>
</table>
@endsection