@extends('layouts.app')
@section('content')

<div align="center">

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>NACIONALIDAD</th>
        </tr>
        @foreach($marcas as $marca)
            <tr>
                <td>{{ $marca['id'] }}</td>
                <td><a href="{{ route('coches.marcas', $marca['id']) }}">{{ $marca['nombre'] }}</a></td>
                <td>{{ $marca['nacionalidad'] }}</td>
            </tr>
        @endforeach
    </table>

</div>

@endsection