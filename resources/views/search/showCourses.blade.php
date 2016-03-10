@extends('app')

@section('content')

    <div class="row">
        <h6>Die Suche nach <b>{{ $searchTerm }}</b> hat folgende Treffer ergeben</h6>
    </div>

    <div class="row">
        @if(isset($searchResults))

            @foreach($searchResults as $singleSearchResult)
                <div class="col s12 m3 l3">
                    <div class="card small hoverable">
                        <div class="card-image">
                            <img src="{{ asset('/img/cards/java_code.png') }}">
                            <span class="card-title">{{ $singleSearchResult->name }}</span>
                        </div>
                        <div class="card-content">
                            <p>{{ $singleSearchResult->description }}</p>
                        </div>
                        <div class="card-action">
                            <a href="/courses/{{ $singleSearchResult->slug }}">Zum Kurs</a>
                        </div>
                    </div>
                </div>
            @endforeach

        @endif
    </div>

@endsection