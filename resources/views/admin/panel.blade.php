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