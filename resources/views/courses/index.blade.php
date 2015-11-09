@extends('app')

@section('header')

<nav class="sucon-background-green-darker">
    <ul class="right hide-on-med-and-down">
        <li><a href="#">Neue</a></li>
        <li><a href="#">Java</a></li>
        <li><a href="#">ABAP</a></li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">SQL</a></li>
        <li><a href="{{ url('/courses/create') }}"><i class="tiny material-icons">library_add</i></a></li>
    </ul>
</nav>

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