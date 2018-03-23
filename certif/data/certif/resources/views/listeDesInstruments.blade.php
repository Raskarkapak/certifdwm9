@extends('layouts.base')
@section('main')
    <h1 class="LEH1">Liste des instruments</h1>
    <table>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>
        @foreach ($instruments as $instrument)
            <tr>
                <td>{{$instrument->name}}</td>
                <td>{{$instrument->price}}</td>
                <td>{{$instrument->stock}}</td>
                <td>
                    {{ Form::open(['url' => '/deleteOneInstrument'])}}
                    {{ Form::hidden('id', $instrument->id) }}
                    {{ Form::submit('supprimer') }}
                    {{ Form::close() }}
                </td>
                <td>
                    {!! Form::open(['url' => '/updateInstrument'])!!}
                    {!! Form::hidden('id', $instrument->id) !!}
                    {!! Form::submit('modifier')!!}
                    {!! Form::close()!!}
                </td>  
                
            </tr>
        @endforeach
    </table>
@endsection

@section('main2')
<table>
<tr>
        <th>Nom du produit</th>
        <th>Prix</th>
     
        <th>Stock</th>
        
</tr>
<tr>
        <h1 class="LEH1">Ajouter un instrument</h1>
             {!! Form::open(['url' => 'insertOneInstrument']) !!}
        <td>  {{  Form::text('name' )}}</td>
    
        <td>  {{  Form::text('price' )}}</td>  
        <td>  {{  Form::text('stock' )}}</td>
    </tr>
    <tr>
            <td class="submit">  {{  Form::submit('Ajouter au magasin')}}</td>  
            {!! Form::close() !!}
    </tr>
</table>
@endsection