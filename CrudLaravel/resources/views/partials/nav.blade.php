<nav>
    <ul>
        
        <li ><a href="{{ route('contactos.index') }}">@lang('contactos')</a></li>

        @guest
            <li><a href="{{route('login')}}">Login</a></li>
        @else
            <li><a href="#"    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> 
                Cerrar Sesion</a>
            </li>
        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


