{!! Form::open(['url' => 'comments']) !!}

@include('comments._form', ['submitButtonText' => 'Kommentieren'])

{!! Form::close() !!}