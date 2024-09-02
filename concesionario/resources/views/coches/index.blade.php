@extends('layouts.app')
@section('content')

    @if($coches)
        <div align="center">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>MATRICULA</th>
                    <th>MODELO</th>
                    <th>COLOR</th>
                    <th>FECHA MATRICULA</th>
                    <th>PRECIO</th>
                    <th>MARCA</th>
                </tr>
                @foreach($coches as $coche)
                    <tr>
                        <td>{{ $coche['id'] }}</td>
                        <td>{{ $coche['matricula'] }}</td>
                        <td>{{ $coche['modelo'] }}</td>
                        <td>{{ $coche['color'] }}</td>
                        <td>{{ $coche['fecha_matricula'] }}</td>
                        <td>{{ $coche['precio'] }}</td>
                        <td>
                            @foreach($marcas as $marca)
                                @if($coche['id_marca'] == $marca['id'])
                                    {{$marca['nombre']}}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else 
        <p>No hay coches</p>
    @endif

@endsection


