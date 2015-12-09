@extends('admin.layout')

@section('content')

    {!! Form::open() !!}

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Create Event
                    </div>

                    <div class="panel-options">
                        <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>

                <div class="panel-body">

                    <div class="form-horizontal form-groups-bordered">

                        <div class="form-group">
                            {!! Form::label('name', 'Event Name', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        {!! Form::label('slug', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('type', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('type', null, ['class' => 'form-control', 'id' => 'type']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('location', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('location', null, ['class' => 'form-control', 'id' => 'location']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('start', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::input('date', 'start', null, ['class' => 'form-control', 'id' => 'start']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('end', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::input('date', 'end', null, ['class' => 'form-control', 'id' => 'end']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('thumbnail', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::file('thumbnail', ['class' => 'form-control', 'id' => 'thumbnail']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        {!! Form::label('banner', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::file('banner', ['class' => 'form-control', 'id' => 'banner']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('discount', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('discount', null, ['class' => 'form-control', 'id' => 'discount']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('show_homepage', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('show_homepage', null, ['class' => 'form-control', 'id' => 'show_homepage']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('about_info', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::textarea('about_info', null, ['class' => 'form-control ckeditor', 'id' => 'about_info']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('parking_info', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::textarea('parking_info', null, ['class' => 'form-control ckeditor', 'id' => 'parking_info']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('arrival_info', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::textarea('arrival_info', null, ['class' => 'form-control ckeditor', 'id' => 'arrival_info']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('map', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::file('map', ['class' => 'form-control', 'id' => 'map']) !!}
                        </div>
                    </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    {!! Form::close() !!}

    <script src="{{asset('admin/assets/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/assets/js/ckeditor/adapters/jquery.js')}}"></script>

@stop