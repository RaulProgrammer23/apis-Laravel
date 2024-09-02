@extends('layouts.app')

    @section('content')

        @auth 
            <h3> Usuario autenticado: {{ Auth::user()->name }}</h3>
        @endauth 

        <div align="center">
            <img src="img/IES-RM-LOGO.jpg" width="300" /> <!--cada elemento sabe donde esta cada cosa , no necesito rutas absolutas con /public-->
                <div align="center">
                    IES RIBERA MOLINOS. SECCIÓN CONTENT
                </div>
        </div>

    @endsection()


