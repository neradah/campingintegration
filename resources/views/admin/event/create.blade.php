{{-- */$random = str_random(10);/* --}}
@extends('admin.layout')

@section('content')

    @if(isset($model))
        {!! Form::model($model, array('method' => 'PATCH', 'files' => true, 'route' => array('admin.event.update', $model->id))) !!}
    @else
        {!! Form::open(['route'=> 'admin.event.store', 'files' => true]) !!}
    @endif


    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

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



            <div class="panel panel-primary" data-collapsed="1">

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

                        @include('admin.includes.form.text', ['name' => 'name', 'label' => 'Event Name'])


                        @include('admin.includes.form.text', ['name' => 'city'])

                    <div class="form-group">
                        {!! Form::label('category', null, ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-5">
                            {!! form::select('category', $categories) !!}
                        </div>
                    </div>


                        @include('admin.includes.form.text', ['name' => 'slug'])



                        @include('admin.includes.form.date', ['name' => 'start',])


                        @include('admin.includes.form.date', ['name' => 'end'])


                        @include('admin.includes.form.file', ['name' => 'thumbnail_upload', 'label' => 'Thumbnail'])



                        @include('admin.includes.form.file', ['name' => 'banner_upload', 'label' => 'Banner'])



                        @include('admin.includes.form.text', ['name' => 'discount', 'label' => 'early bird discount'])

                        @include('admin.includes.form.date', ['name' => 'early_bird_start', 'label' => 'Early Bird Start'])

                        @include('admin.includes.form.date', ['name' => 'early_bird_end', 'label' => 'Early Bird End'])

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

                    <hr><h2>Products</h2></hr>

                    <div style="width:100%;height:20px;"></div>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="form-horizontal ">

                                @forelse($pitch->products()->get() as $product)

                                    <p class="help-block">{{$product->name}}</p>

                                    @include('admin.includes.form.text', ['name' => 'product['.$pitch->id.']['.$product->id.'][cost]', 'value' => $product->price, 'label' => 'Cost'])

                                    @empty
                                       <div class="text-center"> No Products</div>
                                @endforelse

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

    @push('scripts')
    <script src="{{asset('admin/assets/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin/assets/js/ckeditor/adapters/jquery.js')}}"></script>
    @endpush



@stop