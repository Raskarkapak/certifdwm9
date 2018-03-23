@extends('layouts.base')
@section('main')
<body>
    <table>
        <tr>
                <th>Nom du produit</th>
                <th>Prix</th>
                <th>Stock</th>
            </tr>
<tr> 
    <h1 class="LEH1">Coucou ! mise a jour</h1>
    {!! Form::open(['url' => '/updateOneInstrument']) !!}
    {{ Form::hidden('id', $instrument->id)}}
    <td>{!! Form::text('name', $instrument->name) !!}</td>
    <td>{!! Form::text('price', $instrument->price) !!}</td>
    <td>{!! Form::text('stock', $instrument->stock) !!}</td>
</tr>
<tr>
    <td class="submit">{!! Form::submit('Mettre à jour') !!}</td>
    {!! Form::close() !!}

</tr>    
</table>
@endsection