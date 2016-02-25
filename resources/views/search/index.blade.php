@extends('app')

@section('content')

    <form action="{{URL::to('courses/search')}}" method="get" >
        {!! Form::text('search-term', null, ['class' => 'form-control', 'placeholder' => 'Suche']) !!}
        <input type="submit" value="Search">
    </form>


    @if(isset($searchResults))
    <div class="row">
        <div class="container">
            <div id="search-results">
                <ul>
                    @foreach($searchResults as $singleSearchResult)
                        <li>{{ $singleSearchResult->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif

@endsection