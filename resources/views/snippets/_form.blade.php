<div class="input-field">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'length' => '250']) !!}
</div>

<div class="input-field">
    {!! Form::select('customer', $customers, null,  ['class' => 'customer-select']) !!}
</div>

<div class="">
    <!-- languages[] because it has to be treated like an array -->
    {!! Form::select('languages[]', $languages, null, ['multiple' , 'class' => 'browser-default', 'id' => 'languages_list']) !!}
</div>

<div class="">
    {!! Form::select('keywords[]', $keywords, null, ['multiple' , 'class' => 'browser-default', 'id' => 'keywords_list']) !!}
</div>

<div class="input-field">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>