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
    </ul>
</nav>

@endsection

@section('content')

<!-- TODO real data -->
<div class="row">
    @for($i = 1; $i <= 10; $i++)
    <div class="col s12 m4 l4">
        <div class="card medium">
            <div class="card-image">
                <img src="{{ asset('/img/cards/java_code.png') }}">
                <span class="card-title">Java Kurs {{ $i }}</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="{{ url('/courses') . '/' . $i }}">Zum Kurs</a>
            </div>
        </div>
    </div>
    @endfor
</div>

@endsection