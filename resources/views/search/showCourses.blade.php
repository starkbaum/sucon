@extends('app')

@section('content')

    <div class="row">
        <h5>Die Suche nach <b>{{ $searchTerm }}</b> hat folgende Treffer ergeben</h5>
    </div>

    <div class="row">
    @if(isset($searchResults))
        @foreach($searchResults as $course)
        <a href="/courses/{{ $course->slug }}">
            <div class="col s12 m3 l3">
                <div class="card small hoverable">
                    <div class="card-image" style="height: 200px">
                        <img src="{{ asset('/img/cards/java_code.png') }}">
                        <span class="card-title">{{ $course->name }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{ $course->description }}</p>
                    </div>

                </div>
            </div>
        </a>
        @endforeach
    @endif
    </div>

@endsection