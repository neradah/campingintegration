{!! Form::open(array('url' => route('booking.step3', $event->slug), 'class' => 'form-horizontal')) !!}

<div class="container">
 

    <div class="row">
        <div class="col-md-12">
            <h2 class="bookingform_title type-sans2-b">What do you want to Book?</h2>
        </div>
        <div class="col-md-12">
            <ul class="nav nav-tabs product-selector" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="pre-pitched" role="tab" data-toggle="tab" aria-expanded="true">Pre-Pitched Tent</a><span>Select</span></li>
                <li role="presentation" class=""><a href="#profile" aria-controls="pitch" role="tab" data-toggle="tab" aria-expanded="false">Pitch Space<br>(for tent or caravan)</a><span>Select</span></li>
                <li role="presentation" class=""><a href="#messages" aria-controls="glamping" role="tab" data-toggle="tab" aria-expanded="false">Glamping<br>(Luxury Prepitched Tent)</a><span>Select</span></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bookingform_title type-sans2-b">Select Your Tent</h2>
        </div>
        <div class="col-md-12 tent-selector">
            <ul class="bookingform_tents">
                @foreach($event->tents()->get() as $tent)
                <li class="bookingform_tent">
                    <div class="tent-number">{{ $tent->capacity }}</div>
                    <div class="radio tents tent-pitch-{{$tent->pitch_id}}">
                        <div class="bookingform_tent-image">
                            <img src="/uploads/{{$tent->image}}" alt="Tent image">
                        </div>
                        <label class="bookingform_tent-overview type-sans">
                            {!! Form::radio('tent', $tent->id, null) !!}
                            <img src="/assets/images/4p_pitch.svg" width="129" height="94" alt="Four people tent icon">
                            <p class="bookingform_tent-info">
                                <span class="bookingform_tent-type type-sans-b">{{$tent->name}}</span>
                                <span class="bookingform_tent-duration">2 nights stay (dynamic!)</span>
                                <span class="bookingform_tent-dates">{!! $event->start->toFormattedDateString() !!}  &ndash; {!!  $event->end->toFormattedDateString() !!}</span>
                                <span class="bookingform_allocations type-sans">{{$tent->qty}} REMAINING</span>
                            </p>
                            <p class="bookingform_tent-price">
                                <span class="bookingform_tent-cost">&pound;{{$tent->cost}}</span>
                            </p>
                            <span class="bookingform_tent-select">Select</span>
                        </label>
                    </div>
                </li>
                @endforeach
            </ul>
         

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bookingform_title type-sans2-b">Select You Zone</h2>
        </div>
        <div class="col-md-12 bookingform_zones zone-radio-listen">
            @foreach($campSite->zones()->get() as $zone)
                <label class="bookingform_zone">
                    {!! Form::radio('zone', $zone->id, null) !!}
                    <p class="bookingform_zone-text type-sans">
                        <span class="bookingform_zone-title type-sans-b">{{$zone->name}}</span>
                        <span class="bookingform_zone-copy">{{$zone->description}}</span>
                    </p>
                    <div class="bookingform_zone-bg"></div>
                </label>
            @endforeach

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h2 class="bookingform_title type-sans2-b">Select Products</h2>
            <ul class="bookingform_extras cost-listen type-sans">
                @foreach($event->Products()->get() as $product)

                    <li class="bookingform_extra pitch-group-product pitch-group-product-{{$product->pitch_id}}">
                        
                        
                        <p class="bookingform_extra-info">
                            <span class="bookingform_extra-title type-sans-b">{!! Form::label($product->id, $product->name) !!}</span>
                            <span class="bookingform_extra-copy">Random text to describe each extra</span>
                        </p>
                        <div class="bookingform_extra-calc">
                            {!! Form::selectRange('products['.$product->id.']', 0, 10 , null , ['class' => 'form-control bookingform_extra-qty selectpicker bs-select-hidden']) !!}
                            <p class="bookingform_extra-price">Total: &pound;<span class="bookingform_extra-cost">0</span></p>
                        </div>
                    </li>

                @endforeach
            </ul>

        </div>
    </div>
        <h2 class="bookingform_banner type-sans2-l">
            <span class="title">Your Booking</span>
        </h2>
    </div>
    <div class="booking-summary container">
        <div class="row">
            <div class="col-xs-12">
                <div class="tent-details">
                    <div class="row">
                        <div class="col-xs-4">
                            <h3>{{ $event->name }}</h3>
                        </div>
                        <div class="col-xs-4">
                            <h3 id="total-products"><span>17</span> Extras</h3>
                        </div>
                        <div class="col-xs-4">
                            <p class="total">Total: £<span id="total-cost"></span></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group-container">
                    {!! Form::submit('CONTINUE WITH BOOKING',['class' => 'btn btn-primary basket-cont']) !!}
                </div>
            </div>
        </div>
    </div>
    

</div>
<div class="container">
    
</div>

<script>
    // $('.pitch-group-product').hide();

    $('[name=pitch]').on('change', function(){
        // $('.pitch-group-product').hide();
        $('.tents').hide();
        $('.tent-pitch-'+$(this).val()).show();
        $('.pitch-group-product-'+$(this).val()).show();
    });
    $(document).ready(function() {
       $('.product-selector li:first-child').on('click',function() {
          if ($('.tent-selector').attr('display','none')) {
              $('.tent-selector').slideDown();
          }
       });
    });
</script>

        
{!! Form::close() !!}


<style>
    .row{
        padding-bottom: 35px;
    }
</style>