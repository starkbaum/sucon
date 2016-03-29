<form action="{{URL::to('search/' . $page)}}" method="get" id="searchForm">
    <ul>
        <li>
            {!! Form::text('search-term', null, ['class' => 'form-control', 'placeholder' => 'Suche']) !!}
        </li>
        <li>
            <button class="btn sucon-background-orange" type="submit">Suche</button>
        </li>
    </ul>
</form>