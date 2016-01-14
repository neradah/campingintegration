{{-- */$random = str_random(10);/* --}}
@extends('admin.layout')

@section('content')

    @include('admin.includes.header_crud', ['title' => 'Tents', 'route' => 'admin.tent'])

    @include('admin.includes.form.text', ['name' => 'name', 'label' => 'Name'])
    @include('admin.includes.form.text', ['name' => 'youtube', 'label' => 'You Tube Url'])
    @include('admin.includes.form.file', ['name' => 'image_upload'])
    @include('admin.includes.form.number', ['name' => 'capacity'])

    @foreach($pitches as $pitch)

        <div class="form-group">
            {!! Form::label($random, $pitch->name, ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-5">
                {!! Form::checkbox('pitches[]', $pitch->id, isset($model)?$model->pitchgroups->contains($pitch->id):null, ['class' => 'form-control', 'id' => $random]) !!}
                {!! $errors->first('pitches', '<p class="bg-danger">:message</p>') !!}
            </div>
        </div>

    @endforeach


    @include('admin.includes.footer_crud')

@stop