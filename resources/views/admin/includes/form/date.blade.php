<div class="form-group">
    {!! Form::label(sha1($name), isset($label) ? $label : $name, ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-5">


        @if(isset($model))
            <span>{{$model->{$name}->toFormattedDateString()}}</span>

        @else
            {!! Form::input('date', $name, null, ['class' => 'form-control', 'id' => sha1($name)]) !!}
            {!! $errors->first($name, '<p class="bg-danger">:message</p>') !!}
        @endif

    </div>
</div>
