@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>

        </ul>
        <h7>Neuen Kunden anlegen</h7>
    </nav>

@endsection

@section('content')

    <div class="row">
        <div class="col s12 m7 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title sucon-text-green">Neuen Kunden anlegen</span>
                    {!! Form::open(['url' => 'customers']) !!}

                    @include('customers._form', ['submitButtonText' => 'Kunden anlegen'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @include('errors.errorListing')
    </div>

@endsection