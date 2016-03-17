<form action="{{URL::to('search/' . $page)}}" method="get" id="searchForm">
    <ul>
        <li>
            {!! Form::text('search-term', null, ['class' => 'form-control', 'placeholder' => 'Suche']) !!}
        </li>
        <li>
            <button class="btn-floating waves-effect waves-light sucon-background-orange" type="submit">
                <i class="tiny material-icons right">search</i>
            </button>
        </li>
    </ul>
</form>