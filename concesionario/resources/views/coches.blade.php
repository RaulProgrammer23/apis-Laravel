@extends('layouts.app')
@section('content')

<head>
  <link rel="stylesheet" href="{{ asset('css/estilosCoche.css') }}">
</head>

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

            <th>Coche Descuento</th>

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
                <td>
                    {{ $coche['precio'] * (2+2) }}
                </td>
                <td>
                    <div>
                        <button style="display: inline-block;"><a href="{{ route('coches.edit', $coche['id']) }}">Modificar</a></button>

                        <form  style="display: inline-block;" action="{{ route('coches.destroy', $coche['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </div>
                </td>

            </tr>
        @endforeach
    </table>

</div>

@endsection