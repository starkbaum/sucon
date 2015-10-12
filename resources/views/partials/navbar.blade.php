<div class="navbar-fixed">
    <nav class="sucon-background-green">
        <ul class="right hide-on-med-and-down">
            @if( Auth::guest() )
                <li><a href={{ url('/auth/login') }}>Anmelden</a></li>
                <li><a href={{ url('/auth/login') }}>Registrieren</a></li>
            @else
                <li><a href="{{ url('/auth/logout') }}">Abmelden</a></li>
            @endif
        </ul>
        <ul id="slide-out" class="side-nav fixed center-align">

            <img src="{{ asset('/img/Logo.png') }}" alt="">

            <li><a href="{{ url('/courses') }}">Kurse</a></li>
            <li><a href="{{ url('/snippets') }}">Snippets</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </nav>
</div>