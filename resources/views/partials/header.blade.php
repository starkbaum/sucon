<div class="navbar-fixed">
    <nav class="sucon-background-green">
        <ul class="right hide-on-med-and-down">
            @if( Auth::guest() )
                <li><a href={{ url('/auth/login') }}>Anmelden</a></li>
                <li><a href={{ url('/auth/register') }}>Registrieren</a></li>
            @else
                <li><a href="{{ url('/auth/logout') }}">Abmelden</a></li>
            @endif
        </ul>
    </nav>
</div>