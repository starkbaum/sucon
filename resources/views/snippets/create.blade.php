@extends('app')

@section('header')

    <nav class="sucon-background-green-darker">
        <ul class="left hide-on-med-and-down" style="margin-left: 270px;">
            <li><a href="{{ URL::previous() }}" style="font-size: 20px;">&#8592;</a></li>

        </ul>
        <h7>Neues Snippet anlegen</h7>
    </nav>

@endsection

@section('content')

    <h5>Ein neues Snippet anlegen</h5>
    <div class="divider"></div>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url' => 'snippets']) !!}

    @include('snippets._form', ['submitButtonText' => 'Snippet anlegen'])

    {!! Form::close() !!}

@endsection