@extends('layout')

@section('content')



	<!-- HOMEPAGE-SPECIFIC HEADER -->
@include('partials.site-nav')


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
	        <div class="homeheader container">
	            <p class="homeheader_search-title type-sans-b">Start by choosing an event below to book your accommodation</p>
	            <form id="eventsearch_form" class="type-sans">
	                <!--<select class="eventsearch_select selectpicker" data-search-type="country" title="Select a Country">
	                    <option>United Kingdom</option>
	                    <option>France</option>
	                    <option>Iceland</option>
	                    <option>Spain</option>
	                    <option>Denmark</option>
	                </select>-->
                    <div class="row">
                        <div class="col-xs-5">

							{!! Form::select(null, $categories, null, ['title' => 'Select Event Category', 'class' => 'eventsearch_select selectpicker', 'data-search-type' => 'category']) !!}

                        </div>

                        <div class="col-xs-2">
                            <button type="submit" for="eventsearch_form" class="eventsearch_submit">Search all events</button>
                        </div>
                    </div>
                </form>
	        </div>
	    </div>
	</header>



	<!-- Homepage Main Grid -->


	<section class="homegrid container">

		<!-- Music CTA -->
		<div class="homegrid_item homegrid_item--square homegrid_item--music">
			<a href="#" class="homegrid_blocklink">
				<div class="homegrid_square-fullimage">
					<img src="{{asset('assets/images/music.png')}}" alt="Picture of a music festival" />
				</div>
				<div class="homegrid_square-footer">
					<h1 class="homegrid_square-footertitle type-sans2-b"><span class="script type-script">Music festival</span> camping</h1>
					<p class="homegrid_square-footercopy type-sans">If you're more of a glamper than a camper, our pre-pitched tents are perfect for you</p>
				</div>
			</a>
		</div>

		<!-- Selected earlybird deal -->
		<div class="homegrid_item homegrid_item--short homegrid_item--early">
			<a href="#" class="homegrid_earlydeals type-sans">View all Early Bird Deals</a>
            <div class="rounded"><span>£</span><br><p class="type-sans2">Earlybird Discount</p></div>
			<p class="small-rounded"> Save Up To <span> $ebDiscountInPercentage %</span></p>
			<a href="#" class="homegrid_short-link">
				<img src="/assets/uploads/$earlyBirdFeature->thumbnail_image " alt="$earlyBirdFeature->title  header image" style="width: 100%;" class="homegrid_recent-img" />
				<div class="homegrid_short-footer">
					<div class="homegrid_short-whatwhen type-sans">
						<h2 class="homegrid_short-what"> $earlyBirdFeature->title </h2>
						<p class="homegrid_short-when">
							date('D d', strtotime($earlyBirdFeature->start_date))
                            &ndash;
                             date('D d M Y', strtotime($earlyBirdFeature->end_date)) </p>
					</div>
					<div class="homegrid_short-howmuch">
						<p class="homegrid_short-cost type-script">&pound;$ebSaving </p>
					</div>
				</div>
			</a>
		</div>
		<!-- Sport CTA -->
		<div class="homegrid_item homegrid_item--square homegrid_item--sport">
			<a href="#" class="homegrid_blocklink">
				<div class="homegrid_square-fullimage">
					<img src="{{asset('assets/images/sport.png')}}" alt="Picture of a sporting event" />
				</div>
				<div class="homegrid_square-footer">
					<h1 class="homegrid_square-footertitle type-sans2-b"><span class="script type-script">Sport event</span> camping</h1>
					<p class="homegrid_square-footercopy type-sans">From Silverstone to Le Tour de France, we've got a pitch for you</p>
				</div>
			</a>
		</div>

		<!-- Newest event -->
		<div class="homegrid_item homegrid_item--short homegrid_item--recent">
            <img src="" alt="">
            <div class="rounded">
                <img src="/assets/images/recent-star.svg" alt="Recent Star" />
                <p class="type-sans2">Recently Added</p></div>
			<a href="#" class="homegrid_short-link">
				<img src="/assets/uploads/$recentlyAdded->thumbnail_image " alt="$recentlyAdded->title header image" style ="width: 100%;" class="homegrid_recent-img" />
				<div class="homegrid_short-footer">
					<div class="homegrid_short-whatwhen type-sans">
						<h2 class="homegrid_short-what">$recentlyAdded->title</h2>
						<p class="homegrid_short-when">
							date('D d', strtotime($recentlyAdded->start_date))
                            &ndash;
                             date('D d M Y', strtotime($recentlyAdded->end_date))</p>
					</div>
					<div class="homegrid_short-howmuch">
						<p class="homegrid_short-cost type-script">&pound;<span style="font-weight:700">$recentlyAdded->two_man_price </span></p>
					</div>
				</div>
			</a>
		</div>
	</section>



	<!-- Homepage Events Highlights List -->



	<section class="homehl" data-init="homehl">
		<div class="container">
			<h2 class="homehl_title type-sans2-b"><span class="type-script">Event</span> Camping Highlights</h2>
			<p class="homehl_subtitle type-sans">Check out our selection of some of the best events happening around Europe - book early to avoid disappointment!</p>
			<div class="homehl_nav">
				<button class="homehl_nav-btn homehl_nav-btn--prev">&lt;</button>
				<button class="homehl_nav-btn homehl_nav-btn--next">&gt;</button>
			</div>
			<div class="homehl_wrapper">
				<ul class="homehl_list">
					@forelse($highlightsList as $event)

						<li class="eventcard {!! $event->has_early_bird ? 'earlybird' : '' !!}">
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
									<span class="eventcard_pitchesleft type-sans">{!! $event->pitchesLeft!!} pitches left</span>
                                    <!-- Show the Hurry Up card -->
                                    <p class="eventcard_hurry type-sans-b">Hurry Selling Fast</p>
								</a>
							</div>
						</li>
					@empty
					@endforelse
                </ul>
			</div>
			<a href="/events" class="homehl_viewall type-sans2">View all events</a>
		</div>
	</section>



	<section class="container homelowlnks">
		<ul class="homelowlnks_list">
			<li class="homelowlnks_item included">
				<!--<a href="events/foo-fighters-mk-national-bowl-milton-keynes">
					<img src="/assets/images/home_book-pitch.png" />
				</a>--><a href="/how-to" style="display:block; width:100%; height:100%;">
                    <img src="/assets/images/pitch-included.jpg" alt="Pitch Image" />
                    <div class="rounded">
                        <h2 class="type-script">Book</h2>
                        <p class="type-sans2">Your pre-pitched tent with free airbed today!</p>
                    </div>
                    <div class="what-footer">
                        <h2 class="type-script">What's <span class="type-sans2">included</span></h2>
                        <p>Arrive with your tent already put up for you and fully kitted out, no fuss!</p>
                    </div>asfasdf</a>
			</li>
			<li class="homelowlnks_item instagram">
				<a href="#">
					<img src="/assets/images/home_instagram.png" alt="Share on instagram"/>
				</a>
			</li>
			<li class="homelowlnks_item faqs">
				<a href="/faqs">
					<img src="/assets/images/home_lower_faq.png" alt="FAQ icon">
				</a>
			</li>
		</ul>
	</section>
    <script>
    $(document).ready(function() {
        $('.eventcard_hurry').hide();
        $('.eventcard_discount').hide();
        // Change the background color of events if the pitches or tents are below 20
        $('.eventcard .eventcard_link').each(function() {
            var pitchesLeft = parseInt($(this).find('.eventcard_pitchesleft').text());
            var tentsLeft = parseInt($(this).find('.eventcard_tentsleft').text());
            if (pitchesLeft < 20 || tentsLeft < 20) {
                $(this).parent().parent().addClass('hurryup');
            }
        });
        // Remove earlybird class if the event card has the hurryup class

        // Show the hurry up or earlybird msg in the event cards

	    $('.eventcard').each(function() {
            if ($(this).hasClass('earlybird')) {
                $(this).children().children().find('.eventcard_discount').show();
            }
            if ($(this).hasClass('hurryup')) {
                $(this).children().children().find('.eventcard_hurry').show();
            }
        });
    });
</script>
@stop