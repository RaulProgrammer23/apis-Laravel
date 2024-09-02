<nav>
    <div align="center">
        
        @guest
            <a href="{{ route('register') }}">Registrar</a>
            <a href="{{ route('login') }}">Login</a>
        @else
            <!-- <a href="#">{{ Auth::user()->name}}</a> -->
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('coches.index') }}">Coches</a>
            <a href="{{ route('marcas.index') }}">Marcas</a>
            <a href="{{ route('coches.create' )}}">Crear</a>
            
            <form action="{{ route('logout') }}" method="POST">
                @csrf 
                <button>Logout</button>
            </form>
        @endguest

    </div>
    <hr>
</nav>


