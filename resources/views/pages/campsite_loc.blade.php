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
            <h1 class="pageheader_title type-sans2-l">
                Book Your Pre-Pitched Tents For <span class="type-sans2-b">{{$event->name}}</span>
            </h1>
            <p class="bookingheader_date type-sans">
                {{$event->start->toFormattedDateString()}} - {{$event->end->toFormattedDateString()}}
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

    <div class="location container">
        <div class="map-container">
            <div class="row">
                <div class="col-xs-12 map-container">
                    <h1 class="type-sans2">Select Event Campiste location</h1>
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div class="event-main-info">

            @foreach($event->campsites()->get() as $campsite)


            <div class="row event-main-container">
                <div class="hidden-xs col-sm-3 event-img-container">
                    <img src="{!! asset('uploads/'.$campsite->image) !!}" alt="Event Image">
                </div>
                <div class="col-xs-12 col-sm-9 camp-main-info">
                    <div class="event-list-header">
                        <div class="camp-info camp-info1">{{$campsite->name}}</div>
                        <div class="event-info event-info1"><a href="{{route('booking.step2', $event->slug)}}">Book Now</a></div>
                    </div>
                    <dl>
                        <dt class="pitch-loc">0.8km from {{$campsite->name}} Event</dt>
                        <dd></dd>
                        <dt class="pitches-left">Remaining Pitches:</dt>
                        <dd></dd>
                        <dt>Pitch space only (Tents)</dt>
                        <dd>10 LEFT</dd>
                        <dt>Pitch space only (Caravans)</dt>
                        <dd>12 LEFT</dd>
                        <dt>Pre-pitched tents</dt>
                        <dd class="hurry-up">5 LEFT</dd>
                        <dt>Glamping</dt>
                        <dd>14 LEFT</dd>
                        <div style="clear:both"></div>
                    </dl>
                </div>
            </div>
            
    @endforeach

        </div>
    </div>
    
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
        function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 52.770262, lng: -1.754119},
            scrollwheel: false,
            zoom: 14,
            disableDefaultUI: true,
            controls:false,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });

        var site1 = new google.maps.Marker({
            position: {lat: 52.779432, lng: -1.743267},
            icon: '/assets/images/site1.png',
            map: map,
            title: 'Hello World!'
        });
        var site1 = new google.maps.Marker({
            position: {lat: 52.776622, lng: -1.731722},
            icon: '/assets/images/event.png',
            map: map,
            title: 'Hello World!'
        });
        var site2 = new google.maps.Marker({
            position: {lat: 52.767105, lng: -1.756468},
            icon: '/assets/images/site2.png',
            map: map,
            title: 'Hello World!'
        });
        var site3 = new google.maps.Marker({
            position: {lat: 52.772309, lng: -1.767909},
            icon: '/assets/images/site3.png',
            map: map,
            title: 'Hello World!'
        });
    }
    initMap();
    </script>
@stop
