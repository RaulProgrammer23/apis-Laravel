<nav>
    <div align="center">
        @guest  
            <a href="{{ route('games.index') }}">Games</a>
            <a href="{{ route('games.games') }}">Games ALL</a>
            <a href="{{ route('categorias.index') }}">Categorias</a>
            <a href="{{ route('inicio') }}">Inicio</a>
        @endguest
    </div>
</nav>
