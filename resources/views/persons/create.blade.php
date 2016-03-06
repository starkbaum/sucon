@extends('app')

@section('content')

    <h5>Kontaktperson hinzufügen</h5>
    <div class="divider"></div>

    {!! Form::open(['url' => 'persons']) !!}

    @include('persons._form', ['submitButtonText' => 'Kontakperson anlegen'])

    {!! Form::close() !!}

@endsection