@extends('layout')
@section('title')
Book Your Pre-Pitched Tent And Extras For This Event Today
@stop


@section('content')

<!-- - - - - - - - - - - -->
<!-- Booking Page Header -->
<!-- - - - - - - - - - - -->

<header class="pageheader">
    <div class="pageheader_purple">
        
        <div class="bookingheader_info container">
            <img src="/assets/images/home_early.jpg" width="143" height="143" alt="Early bird badge">
            <h1 class="pageheader_title type-sans2-l">
                Book Your Pre-Pitched Tents For <span class="type-sans2-b">{{ $event->title }}</span>
            </h1>
            <p class="bookingheader_date type-sans">
                {!!date('l jS F', strtotime($event->start_date)) !!} 
                &ndash; 
                {!! date('l jS F Y', strtotime($event->end_date)) !!}
            </p>
            
            {{--<div class="bookingheader_earlybadge"></div>--}}
        </div>
    </div>
    <div class="pageheader_darkpurple">
        <ul class="bookingheader_facilities container type-sans">
            <li class="bookingheader_facility toilets">Toilets</li>
            <li class="bookingheader_facility security">24 Hour Security</li>
            <li class="bookingheader_facility parking">Parking</li>
            <li class="bookingheader_facility showers">Showers</li>
            <li class="bookingheader_facility meet">Meet and Greet</li>
            {{--<li class="bookingheader_facility catering">Catering</li>
            <li class="bookingheader_facility disabled">Disabled Facilities</li>
            <li class="bookingheader_facility water">Water Supply on site</li>--}}
        </ul>
   </div>
</header>

<!-- - - - - - - - - - -->
<!-- Booking Page Info -->
<!-- - - - - - - - - - -->

<section class="eventinfo container" data-init="event-info">
    <img src="http://placehold.it/992x250?text=event+banner" alt="alt text" class="eventinfo_img" />
    <nav class="eventinfo_nav type-sans-l">
        <ul class="eventinfo_navlist">
            <li class="eventinfo_navitem active" data-info="about"><button class="eventinfo_navbtn">About the Campsite</button></li>
            <li class="eventinfo_navitem" data-info="map"><button class="eventinfo_navbtn">Campsite Map</button></li>
            <li class="eventinfo_navitem" data-info="arrival"><button class="eventinfo_navbtn">Arrival Information</button></li>
            <li class="eventinfo_navitem" data-info="parking"><button class="eventinfo_navbtn">Parking</button></li>
        </ul>
    </nav>
    <ul class="eventinfo_contentlist type-sans">
        <li class="eventinfo_contentitem active" data-info="about">{!! $event->campsite_info !!}</li>
        <li class="eventinfo_contentitem" data-info="map">
            <img src="/assets/uploads/{!! $event->map_image !!}" class="eventinfo_map"/>
        </li>
        <li class="eventinfo_contentitem" data-info="arrival">{!! $event->arrival_info !!}</li>
        <li class="eventinfo_contentitem" data-info="parking">{!! $event->parking_info !!}</li>
    </ul>
</section>

<!-- - - - - - - - - - - - - -->
<!-- Main Event Booking Form -->
<!-- - - - - - - - - - - - - -->

<section class="bookingform" data-init="booking-form">

    <h2 class="bookingform_banner type-sans2-l">
        <span class="title">Book your pre-pitched tent or pitch and extras for this event below</h2>
    </h2>
	<div class="product-selector container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="bookingform_title type-sans2-b">WHAT DO YOU WANT TO BOOK?</h2>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="pre-pitched" role="tab" data-toggle="tab">Pre-Pitched Tent</a><span>Select</span></li>
                    <li role="presentation"><a href="#profile" aria-controls="pitch" role="tab" data-toggle="tab">Pitch Space<br>(for tent or caravan)</a><span>Select</span></li>
                    <li role="presentation"><a href="#messages" aria-controls="glamping" role="tab" data-toggle="tab">Glamping<br>(Luxury Prepitched Tent)</a><span>Select</span></li>
                </ul>
            </div>
        </div>
    </div> 

    @include('bookings.form')

</section>
@stop