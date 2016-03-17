<div class="input-field">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('description', 'Beschreibung:') !!}
    {!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'length' => '250']) !!}
</div>

<div class="input-field">
    {!! Form::select('customer', $customers, null,  ['class' => 'customer-select']) !!}
</div>

<div class="input-field right-align">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control sucon-background-green']) !!}
</div>