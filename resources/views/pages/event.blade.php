@extends('layout')

@section('content')
@include('partials.site-nav')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>




            <!-- - - - - - - - - - - -->
    <!-- Booking Page Header -->
    <!-- - - - - - - - - - - -->

    <header class="pageheader">
        <div class="pageheader_purple">
            <div class="bookingheader_info container">
                <h1 class="bookingheader_title type-sans2-l">
                    Book Your

                        Pre-Pitched Tents

                    For
                    <span class="type-sans2-b">{{ $event->name }}</span>
                </h1>
                <p class="bookingheader_date type-sans">

                    {{  date('l jS F', strtotime($event->start)) }}
                    &ndash;
                    {{ date('l jS F Y', strtotime($event->end)) }}
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
        <img src="{!! asset($event->banner) !!}" alt="alt text" class="eventinfo_img" />
        <nav class="eventinfo_nav type-sans-l">
            <ul class="eventinfo_navlist">
                <li class="eventinfo_navitem active" data-info="about"><button class="eventinfo_navbtn">About the Campsite</button></li>
                {{--<li class="eventinfo_navitem" data-info="map"><button class="eventinfo_navbtn">Campsite Map</button></li>--}}
                <li class="eventinfo_navitem" data-info="arrival"><button class="eventinfo_navbtn">Arrival Information</button></li>
                <li class="eventinfo_navitem" data-info="parking"><button class="eventinfo_navbtn">Parking</button></li>
            </ul>
        </nav>
        <ul class="eventinfo_contentlist type-sans">
            <li class="eventinfo_contentitem active" data-info="about"><p>{!! $event->about_info !!}</p></li>
            {{--<li class="eventinfo_contentitem" data-info="map">
                <img src="http://placehold.it/992x400?text=map" class="eventinfo_map"/>
            </li>--}}
            <li class="eventinfo_contentitem" data-info="arrival"><p>{!! $event->arrival_info !!}</p></li>
            <li class="eventinfo_contentitem" data-info="parking"><p>{!! $event->parking_info !!}</p></li>
        </ul>
    </section>



    <!-- - - - - - - - - - -->
    <!-- Booking Page Form -->
    <!-- - - - - - - - - - -->

    <p class="bookingform_title">
        <span class="title type-sans2-b">Book your pitch for this event below</span>
        <span class="subtitle type-sans">2 nights 5th &ndash; 6th September</span>
    </p>

    <div class="bookingform container" data-init="booking-form">

        <a href="{{route('booking.step1', $event->slug)}}"> BOOK NOW</a>

    </div>

@stop