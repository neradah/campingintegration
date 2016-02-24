{!! Form::open(array('url' => $form['url'], 'method' => $form['method'], 'class' => 'form-horizontal')) !!}

    {!! Form::hidden('event_id', $event->id); !!}
    {!! Form::hidden('2', $event->two_man_price); !!}
    {!! Form::hidden('4', $event->four_man_price); !!}
    {!! Form::hidden('6', $event->six_man_price); !!}
    {!! Form::hidden('8', $event->eight_man_price); !!}
    {!! Form::hidden('has_early_bird', $event->has_early_bird); !!}
    {!! Form::hidden('early_bird_discount', $event->early_bird_discount); !!}



    <div class="container cost-listen {!! ($errors->has('size')) ? ' has-error' : '' !!}">
        <!-- Tents -->
        <h2 class="bookingform_title type-sans2-b">Select your tent</h2>
        <ul class="bookingform_tents">
            <!-- 2 man -->
            <li class="bookingform_tent">
                <div class="bookingform_tent-image">
                    <img src="http://placehold.it/500x400?text=placeholder" />
                </div>
                <label class="bookingform_tent-overview type-sans">
                    {!! Form::radio('size', 2, false, array('data-cost' => $event->two_man_price)) !!}
                    <img src="/assets/images/2p_pitch.svg" width="129" height="94" alt="Two people tent icon">
                    <p class="bookingform_tent-info">
                        <span class="bookingform_tent-type type-sans-b">Pre-pitched 2 Person Tent</span>
                        <span class="bookingform_tent-duration">{!! $nights !!} nights stay</span>
                        <span class="bookingform_tent-dates">{!!date('jS M Y', strtotime($event->start_date)) !!} &ndash; {!!date('jS M Y', strtotime($event->end_date)) !!}</span>
                        <span class="bookingform_allocations type-sans">{!! $event->allocations->two_dummy !!} remaining</span>
                    </p>
                    @if($event->has_early_bird)
                    <p class="bookingform_tent-price earlybird">
                        <span class="bookingform_tent-ogcost">&pound;{!! $event->two_man_price !!}</span>
                        <span class="bookingform_tent-discount">-{!! $ebDiscountInPercentage !!}%</span>
                        <span class="bookingform_tent-cost">&pound;{!! $event->two_man_price -$ebSaving2 !!}</span>
                    </p>                    
                    @else
                    <p class="bookingform_tent-price">
                        <span class="bookingform_tent-cost">&pound;{!! $event->two_man_price !!}</span>
                    </p>
                    @endif
                    <span class="bookingform_tent-select">Select</span>
                </label>
                <div class="bookingform_tent-video">
                    <a href="#"><span class="chevron-right"></span></a>
                </div>
                <!--<div class="bookingform_allocations type-sans">
                    <span>Only<br/>{!! $event->allocations->two_dummy !!} left</span>
                </div>-->
            </li>
            <!-- 4 man -->
            <li class="bookingform_tent">
                <div class="bookingform_tent-image">
                    <img src="http://placehold.it/500x400?text=placeholder" />
                </div>
                <label class="bookingform_tent-overview type-sans">
                    {!! Form::radio('size', 4, false, array('data-cost' => $event->four_man_price)) !!}
                    <img src="/assets/images/4p_pitch.svg" width="129" height="94" alt="Four people tent icon">
                    <p class="bookingform_tent-info">
                        <span class="bookingform_tent-type type-sans-b">Pre-pitched 4 Person Tent</span>
                        <span class="bookingform_tent-duration">{!! $nights !!} nights stay</span>
                        <span class="bookingform_tent-dates">{!!date('jS M Y', strtotime($event->start_date)) !!} &ndash; {!!date('jS M Y', strtotime($event->end_date)) !!}</span>
                        <span class="bookingform_allocations type-sans">{!! $event->allocations->four_dummy !!} remaining</span>
                    </p>
                    @if($event->has_early_bird)
                    <p class="bookingform_tent-price earlybird">
                        <span class="bookingform_tent-ogcost">&pound;{!! $event->four_man_price !!}</span>
                        <span class="bookingform_tent-discount">-{!! $ebDiscountInPercentage !!}%</span>
                        <span class="bookingform_tent-cost">&pound;{!! $event->four_man_price - $ebSaving4 !!}</span>
                    </p>                    
                    @else
                    <p class="bookingform_tent-price">
                        <span class="bookingform_tent-cost">&pound;{!! $event->four_man_price !!}</span>
                    </p>
                    @endif
                    <span class="bookingform_tent-select">Select</span>
                </label>
                <div class="bookingform_tent-video">
                    <a href="#"><span class="chevron-right"></span></a>
                </div>
                <!--<div class="bookingform_allocations type-sans">
                    <span>Only<br/>{!! $event->allocations->four_dummy !!} left</span>
                </div>-->
            </li>
            <!-- 6 man -->
            <li class="bookingform_tent">
                <div class="bookingform_tent-image">
                    <img src="http://placehold.it/500x400?text=placeholder" />
                </div>
                <label class="bookingform_tent-overview type-sans">
                    {!! Form::radio('size', 6, false, array('data-cost' => $event->six_man_price)) !!}
                    <img src="/assets/images/6p_pitch.svg" width="129" height="94" alt="Six people tent icon">
                    <p class="bookingform_tent-info">
                        <span class="bookingform_tent-type type-sans-b">Pre-pitched 6 Person Tent</span>
                        <span class="bookingform_tent-duration">{!! $nights !!} nights stay</span>
                        <span class="bookingform_tent-dates">{!!date('jS M Y', strtotime($event->start_date)) !!} &ndash; {!!date('jS M Y', strtotime($event->end_date)) !!}</span>
                        <span class="bookingform_allocations type-sans">{!! $event->allocations->six_dummy !!} remaining</span>
                    </p>
                    @if($event->has_early_bird)
                    <p class="bookingform_tent-price earlybird">
                        <span class="bookingform_tent-ogcost">&pound;{!! $event->six_man_price !!}</span>
                        <span class="bookingform_tent-discount">-{!! $ebDiscountInPercentage !!}%</span>
                        <span class="bookingform_tent-cost">&pound;{!! $event->six_man_price - $ebSaving6 !!}</span>
                        
                    </p>                    
                    @else
                    <p class="bookingform_tent-price">
                        <span class="bookingform_tent-cost">&pound;{!! $event->six_man_price !!}</span>
                    </p>
                    @endif
                    <span class="bookingform_tent-select">Select</span>
                </label>
                <div class="bookingform_tent-video">
                    <a href="#"><span class="chevron-right"></span></a>
                </div>
                <!--<div class="bookingform_allocations type-sans">
                    <span>Only<br/>{!! $event->allocations->six_dummy !!} left</span>
                </div>-->
            </li>
            <!-- 8 man -->
            <li class="bookingform_tent">
                <div class="bookingform_tent-image">
                    <img src="http://placehold.it/500x400?text=placeholder" />
                </div>
                <label class="bookingform_tent-overview type-sans">
                    {!! Form::radio('size', 8, false, array('data-cost' => $event->eight_man_price)) !!}
                    <img src="/assets/images/8p_pitch.svg" width="129" height="94" alt="Eight people tent icon">
                    <p class="bookingform_tent-info">
                        <span class="bookingform_tent-type type-sans-b">Pre-pitched 8 Person Tent</span>
                        <span class="bookingform_tent-duration">{!! $nights !!} nights stay</span>
                        <span class="bookingform_tent-dates">{!!date('jS M Y', strtotime($event->start_date)) !!} &ndash; {!!date('jS M Y', strtotime($event->end_date)) !!}</span>
                        <span class="bookingform_allocations type-sans">{!! $event->allocations->eight_dummy !!} remaining</span>
                    </p>
                    @if($event->has_early_bird)
                    <p class="bookingform_tent-price earlybird">
                        <span class="bookingform_tent-ogcost">&pound;{!! $event->eight_man_price !!}</span>
                        <span class="bookingform_tent-discount">-{!! $ebDiscountInPercentage !!}%</span>
                        <span class="bookingform_tent-cost">&pound;{!! $event->eight_man_price - $ebSaving8 !!}</span>
                    </p>                    
                    @else
                    <p class="bookingform_tent-price">
                        <span class="bookingform_tent-cost">&pound;{!! $event->eight_man_price !!}</span>
                    </p>
                    @endif
                    <span class="bookingform_tent-select">Select</span>
                </label>
                <div class="bookingform_tent-video">
                    <a href="#"><span class="chevron-right"></span></a>
                </div>
                <!--<div class="bookingform_allocations type-sans">
                    <span>Only<br/>{!! $event->allocations->eight_dummy !!} left</span>
                </div>-->
            </li>

            {!! ($errors->has('size') ? $errors->first('size') : '') !!}
        </ul>

        <!-- Conditional Earlybird banner -->
        @if( $event->has_early_bird )
        <div class="bookingform_earlybird-banner type-sans2-l">
            <h2>Take advantage of our Early Bird and <span class="type-sans2-b">save {!! $ebDiscountInPercentage !!}%</span></h2>
        </div>
        @endif
        
        <!-- Zones -->
        <h2 class="bookingform_title type-sans2-b">Select your zone</h2>
        <div class="bookingform_zones zone-radio-listen {!! ($errors->has('zone')) ? ' has-error' : '' !!}">
            @foreach($zones as $i => $zone)
            <label class="bookingform_zone">
                <?php $checked = $i == 0 ? true : false; ?>
                {!! Form::radio('zone_id', $zone->id, $checked, array('data-title' => str_replace(' Zone', '', $zone->title) )) !!}
                <p class="bookingform_zone-text type-sans">
                    <span class="bookingform_zone-title type-sans-b">{!! $zone->title !!}</span>
                    <span class="bookingform_zone-copy">{!! $zone->body !!}</span>
                </p>
                <div class="bookingform_zone-bg"></div>
            </label>
            @endforeach
        </div>

        <!-- Beds -->
        <div class="bookingform_beds type-sans">
            <h2 class="bookingform_title type-sans2-b">Included in your package at no extra cost</h2>
            <!-- Single bed -->
            <div class="bookingform_bed beds-listen {!! ($errors->has('single_air_beds')) ? ' has-error' : '' !!}">
                <label class="bookingform_bed-label" for="single_air_beds">
                    {!! ($errors->has('single_air_beds') ? $errors->first('single_air_beds') : '') !!}
                    <p class="bookingform_bed-text">
                        <span class="bookingform_bed-title type-sans-b">Single Air Bed</span>
                        <span class="bookingform_bed-desc">Fabric covered single airbed,pre-pumped and in your tent</span>
                    </p>
                    <!--<div class="bookingform_bed-inputs">
                        <button class="bookingform_bed-btn minus" type="button">&ndash;</button>
                        <input name="single_air_beds" type="number" class="bookingform_bed-num form-control" placeholder="0" min="0">
                        <button class="bookingform_bed-btn plus" type="button">+</button>
                    </div>-->
                    <div class="bed_extra-calc">
                        <!-- Need to add a picker like the Extra products -->
                        <p class="bed_extra-price">Total: &pound;<span class="bookingform_extra-cost">0.00</span></p>
                    </div>
                </label>
            </div>
            <!-- Double bed -->
            <div class="bookingform_bed beds-listen {!! ($errors->has('double_air_beds')) ? ' has-error' : '' !!}">
                <label class="bookingform_bed-label" for="double_air_beds">
                    {!! ($errors->has('double_air_beds') ? $errors->first('double_air_beds') : '') !!}
                    <p class="bookingform_bed-text">
                        <span class="bookingform_bed-title type-sans-b">Double Air Bed</span>
                        <span class="bookingform_bed-desc">Fabric covered single airbed,pre-pumped and in your tent</span>
                    </p>
                    <!--<div class="bookingform_bed-inputs">
                        <button class="bookingform_bed-btn minus" type="button">&ndash;</button>
                        <input name="double_air_beds" type="number" class="bookingform_bed-num form-control" placeholder="0" min="0">
                        <button class="bookingform_bed-btn plus" type="button">+</button>
                    </div>-->
                    
                    <div class="bed_extra-calc">
                       <!-- Need to add a picker like the Extra products -->
                        <p class="bed_extra-price">Total: &pound;<span class="bookingform_extra-cost">0.00</span></p>
                    </div>
                 </label>
            </div>
        </div>

        

        <!-- Extras -->
        <h2 class="bookingform_title type-sans2-b">Upgrade your package</h2>
        <div class="bookingform_extras cost-listen type-sans">
            @foreach($products as $i => $product)
            <div class="bookingform_extra">
                {!! Form::hidden("products[$product->id][cost]", $product->cost, array('data-cost' => $product->cost, 'class' => 'hidden-cost')); !!}
                <p class="bookingform_extra-info">
                    <span class="bookingform_extra-title type-sans-b">{!! $product->title !!}</span>
                    <span class="bookingform_extra-copy">{!! $product->description !!}</span> 
                </p>
                <div class="bookingform_extra-calc">
                    {!! Form::selectRange("products[$product->id][quantity]", 0, 10, null, ['class' => 'bookingform_extra-qty selectpicker']) !!}
                    <p class="bookingform_extra-price">Total: &pound;<span class="bookingform_extra-cost">0.00</span></p>
                </div>
            </div>
            @endforeach
        </div>

    </div>



    <!-- - - - - - - - - -->
    <!-- Booking Summary -->
    <!-- - - - - - - - - -->

    <h2 class="bookingform_banner type-sans2-l">
        <span class="title">Your Booking</h2>
    </h2>
    
    <div class="booking-summary container">
        <div class="row">
            <div class="col-xs-12">
                <div class="tent-details">
                    <div class="row">
                        <div class="col-xs-4">
                            <h3>{!! $event->title !!}</h3>
                        </div>
                        <div class="col-xs-4">
                            <h3 id="total-products"><span>0</span> Extras</h3>
                        </div>
                        <div class="col-xs-4">
                            <p class="total">Total: &pound;<span id="total-cost">0</span></p>
                        </div>
                    </div> 
                    <!--<tr>
                        <td>Pre-Pitched <span id="summary-size">2</span> Person Tent</td>
                        <td>&pound;<span id="tent-cost">{!! $event->two_man_price !!}</span></td>
                    </tr>-->
                    <!--<tr>
                        <td>{!! $nights !!} nights, 
                            {!!date('D dS', strtotime($event->start_date)) !!} 
                            &ndash; 
                            {!! date('D dS Y', strtotime($event->end_date)) !!}
                        </td>
                        <td></td>
                    </tr>-->
                    <!--<tr>
                        <td>Double Airbeds</td>
                        <td><span id="no_of_double_beds">0</span></td>
                    </tr>
                    <tr>
                        <td>Single Airbeds</td>
                        <td><span id="no_of_single_beds">0</span></td>
                    </tr>
                    <tr>
                        <td>Zone</td>
                        <td><span id="selected_zone">Quiet</span></td>
                    </tr>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group container">
                    <!--<div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
                    </div>-->
                    <button class="btn btn-primary basket-cont" type="submit"></i> {!! $form['button'] !!}</button>
                </div>
            </div>
        </div>
    </div>

        <!--<div class="extras-details">
            <table>
                <thead>
                    <tr>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pre-Pitched <span id="summary-size">2</span> Person Tent</td>
                        <td>&pound;<span id="tent-cost">{!! $event->two_man_price !!}</span></td>
                    </tr>
                    {{-- To be continued by Chris, JS Object 'booking-form.js will be the file to look at, as well as this markup' --}}
                </tbody>
            </table>
        </div>-->
        
{!! Form::close() !!}