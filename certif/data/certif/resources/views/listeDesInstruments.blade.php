@extends('layouts.base')
@section('main')
    <h1>Liste des instruments</h1>
    <table>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Suppression</th>
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
                    {{ Form::submit('X') }}
                    {{ Form::close() }}
                </td>
                <td>
                    {!! Form::open(['url' => '/updateInstrument'])!!}
                    {!! Form::hidden('id', $instrument->id) !!}
                    {!! Form::submit('U')!!}
                    {!! Form::close()!!}
                </td>  
                
            </tr>
        @endforeach
    </table>
@endsection