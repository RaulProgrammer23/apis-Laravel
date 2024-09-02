@extends('layouts.app')
@section('content')

<div align="center">

    <table border="1">
        <tr>
            <th>ID</th>
            <th>CATEGORIA</th>
            <th>NACIONALIDAD</th>
        </tr>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria['id'] }}</td>
                <td><a href="{{ route('games.categorias', $categoria['id']) }}">{{ $categoria['categoria'] }}</a></td>
                <td>{{ $categoria['nacionalidad'] }}</td>
            </tr>
        @endforeach
    </table>
        
</div>

@endsection