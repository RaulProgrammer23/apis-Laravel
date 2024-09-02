@extends('layouts.app')
@section('content')

<div align="center">

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PEGI</th>
            <th>PRECIO</th>
            <th>CATEGORIA ID</th>
        </tr>
        @foreach($games as $game)
            <tr>
                <td>{{ $game['id'] }}</td>
                <td>{{ $game['nombre'] }}</td>
                <td>{{ $game['PEGI'] }}</td>
                <td>{{ $game['precio'] }}</td>
                <td>{{ $game['id_categoria'] }}</td>
                <td>
                    <div>
                        <button style="display: inline-block;"><a href="{{ route('games.edit', $game['id']) }}">Modificar</a></button>

                        <form  style="display: inline-block;" action="{{ route('games.destroy', $game['id']) }}" method="POST">
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