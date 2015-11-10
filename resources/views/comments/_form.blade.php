
<div class="input-field">
    {!! Form::label('content', 'Kommentar:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>