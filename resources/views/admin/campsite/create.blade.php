@extends('admin.layout')

@section('content')

    @include('admin.includes.header_crud', ['title' => 'Camp Site', 'route' => 'admin.campsite'])



    @include('admin.includes.form.text', ['name' => 'name'])
    @include('admin.includes.form.text', ['name' => 'address'])

                        <div class="form-group">
                            {!! Form::label('about', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::textarea('about', null, ['class' => 'form-control', 'id' => 'about']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('arrival_info', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::textarea('arrival_info', null, ['class' => 'form-control', 'id' => 'arrival_info']) !!}
                            </div>
                        </div>
    @include('admin.includes.form.text', ['name' => 'check_in_time', 'label' => 'Check in time'])
    @include('admin.includes.form.text', ['name' => 'check_out_time', 'label' => 'Check out time'])



                        <div class="form-group">
                            {!! Form::label('parking_info', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::textarea('parking_info', null, ['class' => 'form-control', 'id' => 'parking_info']) !!}
                            </div>
                        </div>

    @include('admin.includes.footer_crud')

@stop