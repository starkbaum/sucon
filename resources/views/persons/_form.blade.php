<div class="input-field">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('phoneNo', 'Telefon:') !!}
    {!! Form::text('phoneNo', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::select('customer_id', $customers, null,  ['class' => 'customer-select']) !!}
</div>

<div class="input-field">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>