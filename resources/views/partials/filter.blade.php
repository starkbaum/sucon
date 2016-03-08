<nav class="sucon-background-green-darker">

    <ul class="right hide-on-med-and-down">
        <li>@include('partials.searchForm', ['page' => $page])</li>
    </ul>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ url('/' . $page . '/create') }}" class="btn-floating sucon-background-orange"><i class="tiny material-icons">library_add</i></a>
    </div>
</nav>