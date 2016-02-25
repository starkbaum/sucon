<nav class="sucon-background-green-darker">

    <ul class="left">
        <li>@include('partials.searchForm', ['page' => $page])</li>
    </ul>


    <ul class="right hide-on-med-and-down">
        @foreach($languages as $language)
            <li><a href="#">{{ $language }}</a></li>
        @endforeach
        <li><a href="{{ url('/' . $page . '/create') }}"><i class="tiny material-icons">library_add</i></a></li>
    </ul>
</nav>