<div class="input-field">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('city', 'Stadt:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('zipCode', 'Postleitzahl:') !!}
    {!! Form::text('zipCode', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('street', 'Straße:') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('phoneNo', 'Telefon:') !!}
    {!! Form::text('phoneNo', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>