@extends('app')

@section('content')

    <div class="row">
        <h6>Die Suche nach <b>{{ $searchTerm }}</b> hat folgende Treffer ergeben</h6>
    </div>

    <div class="row">
        <div class="col s12 m9">
        @if(isset($searchResults))

            <ul class="collection">
                @foreach($searchResults as $singleSearchResult)
                    <li class="collection-item avatar">
                        <img src="{{ Avatar::create($singleSearchResult->customer()->first()->name)->toBase64() }}" alt="" class="circle">
                        <span class="title">{{ $singleSearchResult->name }}</span>
                        <p>Kunde: {{ $singleSearchResult->customer()->first()->name }}</p>
                        <p>Beschreibung:</p>
                        <p>{{ $singleSearchResult->description }}</p>
                        <a href="/snippets/{{ $singleSearchResult->slug }}" class="secondary-content">Zum Snippet</a>
                    </li>
                @endforeach
            </ul>

        @endif
        </div>
    </div>

@endsection