@extends('app')

@section('content')

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