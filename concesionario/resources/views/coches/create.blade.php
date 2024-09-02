@extends('layouts.app')
@section('content')

<div align="center">
    
    <h1>Crear Coche</h1>
        <form action="{{ route('coches.store') }}" method="post">
            @csrf

            <label for="matricula">MATRICULA</label>
            <input type="text" name="matricula">

            <label for="modelo">MODELO</label>
            <input type="text" name="modelo">

            <label for="color">COLOR</label>
            <input type="text" name="color">

            <label for="fecha_matricula">FECHA_MATRICULA</label>
            <input type="date" name="fecha_matricula">

            <label for="precio">PRECIO</label>
            <input type="number" name="precio">

            <select name="id_marca">
                @foreach($coche as $marca)
                    <option value="{{ $marca['id'] }}">{{ $marca['nombre'] }}</option>
                @endforeach
            </select>

            <button type="submit">Añadir</button>
        </form>

</div>

@endsection

