<!-- Xax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xAx', 'Xax:') !!}
    {!! Form::number('xAx', null, ['class' => 'form-control']) !!}
</div>

<!-- Yax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yAx', 'Yax:') !!}
    {!! Form::number('yAx', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('branches.index') }}" class="btn btn-default">Cancel</a>
</div>
