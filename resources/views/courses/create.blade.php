@extends('app')

@section('content')

    <h5>Einen neuen Kurs anlegen</h5>
    <div class="divider"></div>

    {!! Form::open(['url' => 'courses']) !!}

        @include('courses._form', ['submitButtonText' => 'Add Course'])

    {!! Form::close() !!}

@endsection