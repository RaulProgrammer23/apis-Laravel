@extends('layouts.app')
@section('content')

    @if($games)
        <div align="center">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>PEGI</th>
                    <th>PRECIO</th>
                    <th>ID_CATEGORIA</th>
                </tr>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game['id'] }}</td>
                        <td>{{ $game['nombre'] }}</td>
                        <td>{{ $game['PEGI'] }}</td>
                        <td>{{ $game['precio'] }}</td>
                        <td>{{ $game['id_categoria'] }}</td>
                @endforeach
            </table>
        </div>
    @else 
        <p>No hay games</p>
    @endif

@endsection