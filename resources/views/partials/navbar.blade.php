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
        <ul id="slide-out" class="side-nav fixed left-align">

            <img src="{{ asset('/img/Logo.png') }}" alt="">
            <li><a href="{{ url('/courses') }}"><i class="tiny material-icons left">library_books</i>Kurse</a></li>
            <li><a href="{{ url('/snippets') }}"><i class="tiny material-icons left">receipt</i>Snippets</a></li>
            <li><a href="{{ url('/customers') }}"><i class="tiny material-icons left">business</i>Kunden</a></li>
            @if(Auth::user()->is_admin == true)
                <li><a href="{{ url('/admin') }}"><i class="tiny material-icons left">settings_applications</i>Administration</a></li>
            @endif
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </nav>
</div>