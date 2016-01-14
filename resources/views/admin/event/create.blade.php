{{-- */$random = str_random(10);/* --}}
@extends('admin.layout')

@section('content')

    {!! Form::open(['route'=> 'admin.event.store', 'files' => true]) !!}


    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="1">

                <div class="panel-heading">
                    <div class="panel-title">
                        Camp Sites
                    </div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-horizontal form-groups-bordered">

                                @foreach($campsites as $campsite)

                                    <div class="form-group">
                                        {!! Form::label($random, $campsite->name, ['class' => 'col-sm-3 control-label']) !!}
                                        <div class="col-sm-5">
                                            {!! Form::checkbox('campsites[]', $campsite->id, isset($model)?$model->campsites->contains($campsite->id):null, ['class' => 'form-control', 'id' => $random]) !!}
                                            {!! $errors->first('campsites', '<p class="bg-danger">:message</p>') !!}
                                        </div>
                                    </div>

                                @endforeach


                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>



    <div class="row">
        <div class="col-md-12">



            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        Event Details
                    </div>

                    <div class="panel-options">
                 
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
                            {!! Form::label('city', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        {!! Form::label('catagory', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! form::select('catagory', $categories) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!! Form::label('slug', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) !!}
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
                            {!! Form::file('thumbnail_upload', ['class' => 'form-control', 'id' => 'thumbnail']) !!}
                        </div>
                    </div>


                    <div class="form-group">
                        {!! Form::label('banner', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::file('banner_upload', ['class' => 'form-control', 'id' => 'banner']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('discount', 'early bird discount', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('discount', null, ['class' => 'form-control', 'id' => 'discount']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!! Form::label('early_bird_start', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::input('date', 'early_bird_start', null, ['class' => 'form-control', 'id' => 'early_bird_start']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('early_bird_end', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::input('date', 'early_bird_end', null, ['class' => 'form-control', 'id' => 'early_bird_end']) !!}
                            </div>
                        </div>

                    <div class="form-group">
                        {!! Form::label('show_homepage', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::checkbox('show_homepage', true, null,['class' => 'form-control', 'id' => 'show_homepage']) !!}
                        </div>
                    </div>

                        <div class="form-group">
                            {!! Form::label('show_carousel', null, ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::checkbox('show_carousel', true, null,['class' => 'form-control', 'id' => 'show_carousel']) !!}
                            </div>
                        </div>







                    </div>

                </div>

            </div>

        </div>
    </div>

    @foreach($pitches as $pitch)

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="1">

                <div class="panel-heading">
                    <div class="panel-title">
                        {{$pitch->name}}
                    </div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>

                <div class="panel-body">

                   <div class="row">
                       <div class="col-sm-12">
                           <div class="form-horizontal">

                             @foreach($pitch->tents()->get() as $tent)

                                   <p class="help-block">{{$tent->name}}</p>

                                   @include('admin.includes.form.number', ['name' => 'pitch['.$pitch->id.']['.$tent->id.'][qty]', 'label' => 'Qty'])
                                   @include('admin.includes.form.text', ['name' => 'pitch['.$pitch->id.']['.$tent->id.'][cost]', 'label' => 'Cost'])

                               @endforeach

                           </div>

                       </div>
                   </div>

                    <div style="width:100%;height:20px;"></div>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="form-horizontal form-groups-bordered">

                            @foreach($pitch->products()->get() as $product)

                                    <p class="help-block">{{$product->name}}</p>

                                    <div class="form-group">
                                        {!! Form::label('product'.$product->id, 'Cost', ['class' => 'col-sm-3 control-label']) !!}
                                        <div class="col-sm-5">
                                            @include('admin.includes.form.text', ['name' => 'product['.$pitch->id.']['.$product->id.'][cost]', 'label' => 'Cost'])
                                        </div>
                                    </div>

                                @endforeach

                                </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    @endforeach


    <div class="row">  <div class="col-sm-12"> <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                    {!! Form::submit('Create', ['class' => 'btn btn-default']) !!}
                </div>
            </div></div> </div>



    {!! Form::close() !!}

    <script src="{{asset('admin/assets/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/assets/js/ckeditor/adapters/jquery.js')}}"></script>

@stop