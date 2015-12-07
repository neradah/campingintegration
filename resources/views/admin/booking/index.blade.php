@extends('admin.layout')

@section('content')

<table class="table table-hover">

    <thead>
    <tr>
        <td></td>
        <td>Status</td>
        <td>Event</td>
        <td>Location</td>
        <td>Type</td>
        <td>Date of Event</td>
    </tr>
    </thead>

    @foreach($events as $event)

        <tr>
            <td>{!! Form::checkbox('checkbox') !!}</td>
            <td>{!! $event->status !!}</td>
            <td>{!! $event->event !!}</td>
            <td>{!! $event->location !!}</td>
            <td>{!! $event->type !!}</td>
            <td>{!! $event->date_of_event !!}</td>
        </tr>

        @endforeach

</table>



    @stop