<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $regKey->id }}</p>
</div>

<!-- Key Field -->
<div class="form-group">
    {!! Form::label('key', 'Key:') !!}
    <p>{{ $regKey->key }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $regKey->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $regKey->updated_at }}</p>
</div>

