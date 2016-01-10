@extends('admin.layout')

@section('content')

    {!! Form::open(['route'=> 'admin.event.store']) !!}


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
                                        {!! Form::label($campsite->name, null, ['class' => 'col-sm-3 control-label']) !!}
                                        <div class="col-sm-5">
                                            {!! Form::text('campsite['.$campsite->id.']', null, ['class' => 'form-control', 'id' => $campsite->name]) !!}
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
                            {!! form::select('catagory', ['music', 'sport', 'other']) !!}
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
                           <h2>Tents</h2>
                           <div class="form-horizontal form-groups-bordered">

                             @foreach($pitch->tents() as $tent)

                                 <div>{{$tent->name}}</div>

                                 @endforeach

                           </div>

                       </div>
                   </div>

                    <div style="width:100%;height:20px;"></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Products</h2>
                            <div class="form-horizontal form-groups-bordered">

                            @foreach($pitch->products as $product)

                                    <div class="form-group">
                                        {!! Form::label('product'.$product->id, $product->name, ['class' => 'col-sm-3 control-label']) !!}
                                        <div class="col-sm-5">
                                            {!! Form::text('product['.$product->id.']', $product->price, ['class' => 'form-control', 'id' => 'product'.$product->id]) !!}
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