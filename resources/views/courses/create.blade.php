@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>

        </ul>
        <h7>Neuen Kurs hinzufügen</h7>
    </nav>

@endsection

@section('content')

    <h5>Einen neuen Kurs anlegen</h5>
    <div class="divider"></div>

    @include('errors.errorListing')

    {!! Form::open(['url' => 'courses']) !!}

        @include('courses._form', ['submitButtonText' => 'Add Course'])

    {!! Form::close() !!}

@endsection