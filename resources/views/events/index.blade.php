@extends(Config::get('core.default'))


@section('title')
Events
@stop


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
                    
                    <!--<select class="eventsearch_select selectpicker" data-search-type="country" title="Select a Country">
                        <option>United Kingdom</option>
                        <option>France</option>
                        <option>Iceland</option>
                        <option>Spain</option>
                        <option>Denmark</option>
                    </select>-->
                    <!--<button type="submit" for="eventsearch_form" class="eventsearch_submit">Search</button>-->
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

                <li class="eventcard {!! $event->has_early_bird ? 'earlybird' : '' !!} mix">
                    <div class="eventcard_overview">
                        <a href="{!! URL::route('events.show', array('events' => $event->slug)) !!}" class="eventcard_link">
                            <img src="/assets/uploads/{!! $event->thumbnail_image !!}" alt="alt text" class="eventcard_img" />
                            <h3 class="eventcard_name type-sans-b">{!! $event->title !!}</h3>
                            <p class="eventcard_location type-sans">{!! $event->city !!} | {!! $event->country !!}</p>
                            <p class="eventcard_cost type-sans-b">{!! $event->nights !!} nights from <span class="eventcard_price type-sans-b">&pound;{!!$event->two_man_price!!}</span></p>
                            <p class="eventcard_dates type-sans">{!!date('d M', strtotime($event->start_date)) !!}  &ndash; {!!date('d M Y', strtotime($event->end_date)) !!}</p>
                            <span class="eventcard_tentsleft type-sans">{!! $event->tentsLeft !!} tents left</span>
                            @if($event->has_early_bird)
                                <p class="eventcard_discount type-sans-b">{!! $event->percentDiscount !!}% Early Bird Discount</p>
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

{{--<div class="row">
    <div class="col-xs-8">
        <p class="lead">
            @if (count($events) == 0)
                There are currently no events.
            @else
                Here you may find our events:
            @endif
        </p>
    </div>
    @auth('edit')
        <div class="col-xs-4">
            <div class="pull-right">
                <a class="btn btn-primary" href="{!! URL::route('events.create') !!}"><i class="fa fa-calendar"></i> New Event</a>
            </div>
        </div>
    @endauth
</div>
@foreach($events as $event)
    <h2>{!! $event->title !!}</h2>
    <p>
        <strong>{!! $event->start_date->format('l jS F Y H:i') !!}</strong>
    </p>
    <p>
        <a class="btn btn-success" href="{!! URL::route('events.show', array('events' => $event->slug)) !!}"><i class="fa fa-file-text"></i> Show Event</a>
        @auth('edit')
             <a class="btn btn-info" href="{!! URL::route('events.edit', array('events' => $event->id)) !!}"><i class="fa fa-pencil-square-o"></i> Edit Event</a> <a class="btn btn-danger" href="#delete_event_{!! $event->id !!}" data-toggle="modal" data-target="#delete_event_{!! $event->id !!}"><i class="fa fa-times"></i> Delete Event</a>
        @endauth
    </p>
    <br>
@endforeach
@stop

@section('bottom')
@auth('edit')
    @include('events.deletes')
@endauth
@stop
--}}