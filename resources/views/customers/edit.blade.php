@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>

        </ul>
        <h7>Daten von {{ $customer->name }} ändern</h7>
    </nav>

@endsection

@section('content')
    {!! Form::model($customer, ['method' => 'PATCH', 'action' => ['CustomersController@update', $customer->id]]) !!}

    @include('customers._form', ['submitButtonText' => 'Kunden ändern'])

    {!! Form::close() !!}
@endsection