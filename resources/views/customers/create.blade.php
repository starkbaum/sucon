@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>

        </ul>
        <h7>Neuen Kunden hinzufügen</h7>
    </nav>

@endsection

@section('content')

    <h5>Neuen Kunden hinzufügen</h5>
    <div class="divider"></div>

    <div class="row">
        <div class="col s12 m9 l8">
            @include('errors.errorListing')
        </div>
    </div>

    <div class="row">
        <div class="col s12 m9 l8">

            {!! Form::open(['url' => 'customers']) !!}

            @include('customers._form', ['submitButtonText' => 'Kunden anlegen'])

            {!! Form::close() !!}

        </div>
    </div>



@endsection