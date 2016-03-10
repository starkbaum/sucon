@extends('app')

@section('header')

    @include('partials.filter', ['page' => 'courses'])

@endsection

@section('content')

<div class="row">
    @foreach($courses as $course)
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
</div>

@endsection