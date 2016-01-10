@extends('layout')

@section('content')


<header class="pageheader">
    <!-- Step-by-step instructional overview -->
    <div class="pageheader_darkpurple">
        <div class="container">
            <h1 class="homeheader_steps-title type-sans2-l">Pre-pitched tent hire. <span class="type-script">Event</span> Camping the easy way.</h1>
            <ul class="homeheader_steps">
                <li class="homeheader_stepitem"></li>
                <li class="homeheader_stepitem"></li>
                <li class="homeheader_stepitem"></li>
                <li class="homeheader_stepitem"></li>
                <li class="homeheader_stepitem"></li>
            </ul>
        </div>
    </div>
    <!-- Search -->
    <div class="pageheader_purple">
        <div class="container">
            <p class="homeheader_search-title type-sans-b">Start by choosing an event below to book your accommodation</p>
           {!! Form::open(['id' => '', 'class' => 'type-sans']) !!}
           {!! Form::select('catagory', ['music', 'sport', 'other'], ['class' => 'homeheader_search-select selectpicker', 'title' => 'Select Event Category']) !!}




                {!! Form::submit('Search') !!}
            {!! Form::close() !!}
        </div>
    </div>
</header>



<!-- Homepage Main Grid -->



<section class="homegrid container">
    <!-- Music CTA -->
    <div class="homegrid_item homegrid_item--square homegrid_item--music">
        <a href="#" class="homegrid_blocklink">
            <div class="homegrid_square-fullimage">
                <img src="http://placehold.it/420x480?text=placeholder" alt="Picture of a music festival" />
            </div>
            <div class="homegrid_square-footer">
                <h1 class="homegrid_square-footertitle type-sans2-b"><span class="script type-script">Music festival</span> camping</h1>
                <p class="homegrid_square-footercopy type-sans">If you're more of a glamper than a camper, our pre-pitched tents are perfect for you</p>
            </div>
        </a>
    </div>


    @if($earlybird)
    <!-- Selected earlybird deal -->
    <div class="homegrid_item homegrid_item--short homegrid_item--early">
        <a href="#" class="homegrid_earlydeals type-sans">View all Early Bird Deals</a>
        <a href="#" class="homegrid_short-link">
            <img src="http://placehold.it/243x173?text=placeholder" alt="Alternative text" class="homegrid_recent-img" />
            <div class="homegrid_short-footer">
                <div class="homegrid_short-whatwhen type-sans">
                    <h2 class="homegrid_short-what">{{$earlybird->name}}</h2>
                    <p class="homegrid_short-when">{{$earlybird->start}} &ndash; {{$earlybird->end}}</p>
                </div>
                <div class="homegrid_short-howmuch">
                    <p class="homegrid_short-cost type-script">Â£123</p>
                </div>
            </div>
        </a>
    </div>
    @endif



    <!-- Sport CTA -->
    <div class="homegrid_item homegrid_item--square homegrid_item--sport">
        <a href="#" class="homegrid_blocklink">
            <div class="homegrid_square-fullimage">
                <img src="" alt="Picture of a sporting event" />
            </div>
            <div class="homegrid_square-footer">
                <h1 class="homegrid_square-footertitle type-sans2-b"><span class="script type-script">Sport event</span> camping</h1>
                <p class="homegrid_square-footercopy type-sans">From Silverstone to Le Tour de France, we've got a pitch for you</p>
            </div>
        </a>
    </div>
    <!-- Newest event -->
    <div class="homegrid_item homegrid_item--short homegrid_item--recent">
        <a href="#" class="homegrid_short-link">
            <img src="http://placehold.it/243x173?text=placeholder" alt="Alternative text" class="homegrid_recent-img" />
            <div class="homegrid_short-footer">
                <div class="homegrid_short-whatwhen type-sans">
                    <h2 class="homegrid_short-what">Event Title Here</h2>
                    <p class="homegrid_short-when">Day 1st Jan &ndash; Day 31st Dec 2015</p>
                </div>
                <div class="homegrid_short-howmuch">
                    <p class="homegrid_short-cost type-script">Â£123</p>
                </div>
            </div>
        </a>
    </div>
</section>



<!-- Homepage Events Highlights List -->



<section class="homehl container" data-init="homehl">
    <h2 class="homehl_title type-sans2-b"><span class="type-script">Event</span> Camping Highlights</h2>
    <p class="homehl_subtitle type-sans">Check out our selection of some of the best events happening around Europe - book early to avoid disappointment!</p>
    <div class="homehl_nav">
        <button class="homehl_nav-btn homehl_nav-btn--prev">&lt;</button>
        <button class="homehl_nav-btn homehl_nav-btn--next">&gt;</button>
    </div>
    <div class="homehl_wrapper">
        <ul class="homehl_list">
            <li class="homehl_item">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Leeds Festival</h3>
                        <p class="homehl_location type-sans">Leeds | England</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                    </a>
                </div>
            </li>
            <li class="homehl_item">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Silverstone (Longer TItle)</h3>
                        <p class="homehl_location type-sans">Towcester | England</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                    </a>
                </div>
            </li>
            <li class="homehl_item earlybird">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Benicassim</h3>
                        <p class="homehl_location type-sans">Barcelona | Spain</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                        <p class="homehl_discount type-sans-b">10% Early Bird Discount</p>
                    </a>
                </div>
            </li>
            <li class="homehl_item">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Leeds Festival</h3>
                        <p class="homehl_location type-sans">Leeds | England</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                    </a>
                </div>
            </li>
            <li class="homehl_item">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Leeds Festival</h3>
                        <p class="homehl_location type-sans">Leeds | England</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                    </a>
                </div>
            </li>
            <li class="homehl_item">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Silverstone (Longer TItle)</h3>
                        <p class="homehl_location type-sans">Towcester | England</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                    </a>
                </div>
            </li>
            <li class="homehl_item earlybird">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Benicassim</h3>
                        <p class="homehl_location type-sans">Barcelona | Spain</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                        <p class="homehl_discount type-sans-b">10% Early Bird Discount</p>
                    </a>
                </div>
            </li>
            <li class="homehl_item">
                <div class="homehl_overview">
                    <a href="#" class="homehl_link">
                        <img src="http://placehold.it/227x173?text=placeholder" alt="alt text" class="homehl_img" />
                        <h3 class="homehl_name type-sans-b">Leeds Festival</h3>
                        <p class="homehl_location type-sans">Leeds | England</p>
                        <p class="homehl_cost type-sans-b">2 nights from <span class="homehl_price type-sans-b">Â£123</span></p>
                        <p class="homehl_dates type-sans">12 Mth &ndash; 34 Mth 2015</p>
                        <span class="homehl_tentsleft type-sans">12 tents left</span>
                        <span class="homehl_pitchesleft type-sans">5 pitches left</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <a href="#" class="homehl_viewall type-sans2">View all events</a>
</section>

@stop