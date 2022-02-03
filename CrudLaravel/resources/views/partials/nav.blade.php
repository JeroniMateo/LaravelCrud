<nav>
    <ul>
        
        <li ><button><a href="{{ route('contactos.index') }}">@lang('contactos')</a></button></li>

        @guest
            <li><a href="{{route('login')}}">Login</a></li>
        @else
            <li><button><a href="#"    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> 
                Cerrar Sesion</a></button>
            </li>
        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


