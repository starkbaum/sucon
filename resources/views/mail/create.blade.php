@extends('app')

@section('content')

    <div class="row">
        <div class="col s12 m9 l8">
            {!! Form::open(['method' => 'get', 'url' => 'mail/sendMail/' . $file->id]) !!}

            <div class="input-field">
                {!! Form::label('email', 'Empfänger') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="input-field">
                {!! Form::label('subject', 'Betreff') !!}
                {!! Form::text('subject', null, ['class' => 'form-control']) !!}
            </div>

            <div class="input-field">
                {!! Form::label('body', 'Nachricht') !!}
                {!! Form::textarea('body', null, ['class' => 'materialize-textarea', 'length' => '250']) !!}
            </div>

            <div class="input-field">
                {!! Form::submit('Senden', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>



@endsection