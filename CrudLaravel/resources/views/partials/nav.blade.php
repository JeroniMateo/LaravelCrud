<nav>
    <ul>
        
        <button><a href="{{ route('contactos.index') }}">@lang('contactos')</a></button>
        <br>
        @guest
            <li><a href="{{route('login')}}">Login</a></li>
        @else
            <button><a href="#"    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> 
                Cerrar Sesion</a></button>
            
        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


