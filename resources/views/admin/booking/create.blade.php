@extends('admin.layout')

@section('content')

    <div class="jumbotron">
        <h2>Create Event</h2>
    </div>

    {!! Form::open() !!}

    <h2>Event Dtails</h2>

    <div class="form-group">
        {!! Form::label('name', 'Event Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Event Status') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
    </div>

    <!-- type Form Input -->
    <div class="form-group">
        {!! Form::label('type') !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>


    <!-- location Form Input -->
    <div class="form-group">
        {!! Form::label('location') !!}
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>

    <!-- start Form Input -->
    <div class="form-group">
        {!! Form::label('start') !!}
        {!! Form::input('date', 'start', null, ['class' => 'form-control']) !!}
    </div>

    <!-- end Form Input -->
    <div class="form-group">
        {!! Form::label('end') !!}
        {!! Form::input('date', 'end', null, ['class' => 'form-control']) !!}
    </div>

    <!-- thumbnail Form Input -->
    <div class="form-group">
        {!! Form::label('thumbnail') !!}
        {!! Form::file('thumbnail') !!}
    </div>

    <!-- banner Form Input -->
    <div class="form-group">
        {!! Form::label('banner') !!}
        {!! Form::file('banner') !!}
    </div>

    <h2>Discount & Options</h2>

    <!-- discount Form Input -->
    <div class="form-group">
        {!! Form::label('discount') !!}
        {!! Form::input('number', 'discount', null, ['class' => 'form-control']) !!}
    </div>

    <!-- show_homepage Form Input -->
    <div class="form-group">
        {!! Form::label('show_homepage') !!}
        {!! Form::checkbox('show_homepage', null, ['class' => 'form-control']) !!}
    </div>

    <h2>Campsite & Arrival info</h2>

    <!-- about_info Form Input -->
    <div class="form-group">
        {!! Form::label('about_info') !!}
        {!! Form::textarea('about_info', null, ['class' => 'form-control']) !!}
    </div>

    <!-- parking_info Form Input -->
    <div class="form-group">
        {!! Form::label('parking_info') !!}
        {!! Form::textarea('parking_info', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('arrival_info') !!}
        {!! Form::textarea('arrival_info', null, ['class' => 'form-control']) !!}
    </div>

    <!-- map Form Input -->
    <div class="form-group">
        {!! Form::label('map') !!}
        {!! Form::file('map') !!}
    </div>

    {!! Form::submit() !!}
    


    {!! Form::close() !!}
    

@stop