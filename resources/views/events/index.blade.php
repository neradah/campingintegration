@extends('layout')
@section('content')

    <!-- - - - - - - - - - -->
    <!-- Event List Header -->
    <!-- - - - - - - - - - -->

    <header class="pageheader">
        <div class="pageheader_darkpurple">
            <div class="container">
                <h1 class="pageheader_title type-sans2-l">Find your event and <span class="type-sans2-b">Book your pre-pitched tents</span></h1>
                
            </div>
        </div>
        <div class="pageheader_purple">
            <div class="eventsheader container">
                <!-- Search form -->
                <form id="eventsearch_form" class="type-sans">
                    <div class="row">
                        <div class="col-xs-3">
                            <select class="eventsearch_select selectpicker" data-search-type="category" title="Select Event Category">
                                <option>Music</option>
                                <option>Sport</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <div class="events_filtersort">
                                <label class="earlyfilter type-sans">
                                    <button class="btn btn-custom early_btn filter" data-filter=".earlybird">EARLYBIRD</button>
                                    <button class="btn btn-custom all_btn filter" data-filter="all">SHOW ALL</button>
                                    <button class="resetsearch type-sans">Clear Search</button>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="events_filtersort">
                                <select class="eventsort selectpicker type-sans">
                                    <option>Recently Added</option>
                                    <option>Forthcoming Events</option>
                                    <option>Price (Low - High)</option>
                                    <option>Price (High  -Low)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    

                </form>
                
            </div>
        </div>
    </header>



    <!-- - - - - - - - - - - -->
    <!-- Events List Results -->
    <!-- - - - - - - - - - - -->

    <div class="events container">

        <!-- Filter and sort results -->
        

        <!-- The results list -->
        <ul id="mix-wrapper" class="eventslist">
        @if( count($events) == 0 )
            There are currently no events.
        @else
            @foreach($events as $event)

                <li class="eventcard @if(is_early_bird($event)) earlybird @endif mix">
                    <div class="eventcard_overview">
                        <a href="{!! URL::route('events.show', array('events' => $event->slug)) !!}" class="eventcard_link">
                            <img src="/assets/uploads/{!! $event->thumbnail_image !!}" alt="alt text" class="eventcard_img" />
                            <h3 class="eventcard_name type-sans-b">{!! $event->name !!}</h3>
                            <p class="eventcard_location type-sans">{!! $event->location !!}</p>

                            <p class="eventcard_cost type-sans-b"> <span class="eventcard_price type-sans-b">&pound;{{get_cheapest($event)}}</span></p>
                            <p class="eventcard_dates type-sans">{{$event->start->toFormattedDateString()}}   &ndash; {{$event->end->toFormattedDateString()}} </p>
                            <span class="eventcard_tentsleft type-sans">{!! $event->tentsLeft !!} tents left</span>


                            @if(is_early_bird($event))
                                <p class="eventcard_discount type-sans-b">{!! $event->discount !!}% Early Bird Discount</p>
                            @endif
                            <!-- Pitches Left must be dynamic -->
                            <span class="eventcard_pitchesleft type-sans">21 pitches left</span>
                            <p class="eventcard_hurry type-sans-b">Hurry Selling Fast</p>
                        </a>
                    </div>
                </li>

            @endforeach
        @endif
        </div>
    </div>

@stop

