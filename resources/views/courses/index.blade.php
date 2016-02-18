@extends('app')

@section('header')

    @include('partials.filter', ['page' => 'courses'])

@endsection

@section('content')

<div class="row">
    @foreach($courses as $course)
    <div class="col s12 m4 l4">
        <div class="card medium hoverable">
            <div class="card-image">
                <img src="{{ asset('/img/cards/java_code.png') }}">
                <span class="card-title">{{ $course->name }}</span>
            </div>
            <div class="card-content">
                <p>{{ $course->description }}</p>
            </div>
            <div class="card-action">
                <a href="/courses/{{ $course->slug }}">Zum Kurs</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection