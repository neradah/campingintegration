@if(isset($model))
    {!! Form::model($model, array('method' => 'PATCH', 'files' => true, 'route' => array($route.'.update', $model->id))) !!}
@else
    {!! Form::open(['route'=> $route.'.store', 'files' => true]) !!}
@endif

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    {{$title}}
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