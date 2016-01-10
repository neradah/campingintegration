{{-- */$random = str_random(10);/* --}}
<div class="form-group">
    {!! Form::label($name.'-'.$random, isset($label) ? $label : $name, ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-5">
        {!! Form::file($name, ['class' => 'form-control', 'id' => $name.'-'.$random]) !!}
        {!! $errors->first($name, '<p class="bg-danger">:message</p>') !!}
    </div>
</div>
