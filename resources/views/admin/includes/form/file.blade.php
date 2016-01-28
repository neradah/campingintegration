<div class="form-group">
    {!! Form::label(sha1($name), isset($label) ? $label : $name, ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::file($name, ['class' => 'form-control', 'id' => sha1($name)]) !!}
        {!! $errors->first($name, '<p class="bg-danger">:message</p>') !!}
    </div>
</div>
