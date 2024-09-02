@extends('layouts.app')
@section('content')

<div align="center">

    <table border="1">
        <tr>
            <th>ID</th>
            <th>MATRICULA</th>
            <th>MODELO</th>
            <th>COLOR</th>
            <th>FECHA_MATRICULA</th>
            <th>PRECIO</th>
            <th>ID_MARCA</th>
            <th>ACCIONES</th>
        </tr>
        @foreach($coches as $coche)
            <tr>
                <td>{{ $coche['id'] }}</td>
                <td>{{ $coche['matricula'] }}</td>
                <td>{{ $coche['modelo'] }}</td>
                <td>{{ $coche['color'] }}</td>
                <td>{{ $coche['fecha_matricula'] }}</td>
                <td>{{ $coche['precio'] }}</td>
                <td>{{ $coche['id_marca'] }}</td>
            </tr>
        @endforeach
    </table>

</div>

@endsection