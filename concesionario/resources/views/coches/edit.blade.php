@extends('layouts.app')
@section('content')

<div align="center">
    
    <h1>Crear Coche</h1>
        <form action="{{ route('coches.update', $coche['id']) }}" method="post">
            @csrf
            @method('PUT')
            
            <!-- <label for="id">ID</label> -->
            <input type="hidden" name="id" value="{{$coche['id']}}">

            <label for="matricula">MATRICULA</label>
            <input type="text" name="matricula" value="{{$coche['matricula']}}">

            <label for="modelo">MODELO</label>
            <input type="text" name="modelo" value="{{$coche['modelo']}}">

            <label for="color">COLOR</label>
            <input type="text" name="color" value="{{$coche['color']}}">

            <label for="id">FECHA_MATRICULA</label>
            <input type="text" name="fecha_matricula" value="{{$coche['fecha_matricula']}}">

            <label for="precio">PRECIO</label>
            <input type="text" name="precio" value="{{$coche['precio']}}">

            <label for="id_marca">ID_MARCA</label>
            <input type="text" name="id_marca" value="{{$coche['id_marca']}}">

            <button type="submit">Añadir</button>
        </form>

</div>

@endsection

