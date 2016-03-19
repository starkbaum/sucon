<nav class="sucon-background-green-darker">
    <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('admin/statistics') }}">Statistiken</a></li>
        <li><a href="{{ url('admin/users') }}">Userverwaltung</a></li>
        <li><a href="{{ url('admin/files') }}">
                Dateifreigabe
                <span class="neue badge sucon-background-orange">{{ $countNotAcceptedFiles }}</span>
            </a>
        </li>
        <li><a href="{{ url('admin/log') }}" target="_blank">Log</a></li>
    </ul>
</nav>