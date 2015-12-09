@extends('admin.layout')

@section('content')

    @if(isset($model))
        {!! Form::model($model, array('method' => 'PATCH', 'route' => array('admin.pitch.update', $model->id))) !!}
    @else
        {!! Form::open(['route'=> 'admin.pitch.store']) !!}
    @endif


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
                            {!! Form::label('name', 'Group Name', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        {!! Form::label('Persons', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('persons', null, ['class' => 'form-control', 'id' => 'persons']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">

                                {!! Form::submit('Create', ['class' => 'btn btn-default']) !!}
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