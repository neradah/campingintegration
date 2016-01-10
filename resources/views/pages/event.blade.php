@extends('layout')

@section('content')



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
                    <span class="type-sans2-b">{{ $event->title }}</span>
                </h1>
                <p class="bookingheader_date type-sans">
                    2 nights 5th &ndash; 6th September
                    {{-- date('l jS F', strtotime($event->start_date)) }}
                    &ndash;
                    {{ date('l jS F Y', strtotime($event->end_date)) --}}
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
        <img src="/assets/images/foo_fighters_event.png" alt="alt text" class="eventinfo_img" />
        <nav class="eventinfo_nav type-sans-l">
            <ul class="eventinfo_navlist">
                <li class="eventinfo_navitem active" data-info="about"><button class="eventinfo_navbtn">About the Campsite</button></li>
                {{--<li class="eventinfo_navitem" data-info="map"><button class="eventinfo_navbtn">Campsite Map</button></li>--}}
                <li class="eventinfo_navitem" data-info="arrival"><button class="eventinfo_navbtn">Arrival Information</button></li>
                <li class="eventinfo_navitem" data-info="parking"><button class="eventinfo_navbtn">Parking</button></li>
            </ul>
        </nav>
        <ul class="eventinfo_contentlist type-sans">
            <li class="eventinfo_contentitem active" data-info="about"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></li>
            {{--<li class="eventinfo_contentitem" data-info="map">
                <img src="http://placehold.it/992x400?text=map" class="eventinfo_map"/>
            </li>--}}
            <li class="eventinfo_contentitem" data-info="arrival"><p>Arrival Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></li>
            <li class="eventinfo_contentitem" data-info="parking"><p>Parking Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></li>
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
        <?php
        $form = ['url' => URL::route('events-bookings-add-to-cart'),
                'method'   => 'POST',
                'button'   => 'Add To Basket',
                'defaults' => [
                        'title'           => '',
                        'date_of_booking' => '',
                        'size'            => '',
                        'zone_id'         => ''
                ],
                'zones' => $zones,
                'event' => $event
        ];
        ?>

    </div>

@stop