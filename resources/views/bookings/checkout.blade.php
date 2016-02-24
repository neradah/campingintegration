@extends(Config::get('core.default'))

@section('title')
Shopping Bag
@stop

@section('top')
@stop

@section('content')

    <!-- Shopping basket page header -->

    <header class="pageheader basketpage">
        <div class="pageheader_purple">
            <div class="container">
                <h1 class="shoppingheader_title type-sans2-l">Welcome to your<br/><span class="type-sans2-b">Shopping Basket</span></h1>
            </div>
        </div>
    </header>

    <section class="shoppingbasket" data-init="shopping-basket">

        {!! Form::open(array('url' => '/events/bookings/payment', 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'form-shoppingbasket')) !!}

            <div class="basket_section">

                <div class="container">

                    <h2 class="basket_section-title type-sans2-l">Shopping Bag</h2>

                    @if(Cart::count() == 0)
                        <p>Cart is empty</p>
                    @else

                    {!! Form::hidden('event_id', $event->id); !!}
                    {!! Form::hidden('2', $event->two_man_price); !!}
                    {!! Form::hidden('4', $event->four_man_price); !!}
                    {!! Form::hidden('6', $event->six_man_price); !!}
                    {!! Form::hidden('has_early_bird', $event->has_early_bird); !!}
                    {!! Form::hidden('early_bird_discount', $event->early_bird_discount); !!}

                    {{-- @foreach($cart as $row) --}}

                    {{--
                    <h2>{!! $row->options->eventTitle!!}</h2>
                    <div>
                        {!! $row->name !!}<br />
                        {!! $row->options->startDate.' - '.$row->options->endDate !!}<br />
                        <div class="beds-listen form-group{!! ($errors->has('double_air_beds')) ? ' has-error' : '' !!}">
                            <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="double_air_beds">Double Air Bed</label>
                            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
                                <input name="double_air_beds" value="{!! $row->options->double_air_beds !!}" type="text" class="form-control" placeholder="">
                                {!! ($errors->has('double_air_beds') ? $errors->first('double_air_beds') : '') !!}
                            </div>
                        </div>
                        <div class="beds-listen form-group{!! ($errors->has('single_air_beds')) ? ' has-error' : '' !!}">
                            <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="single_air_beds">Single Air Bed</label>
                            <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
                                <input name="single_air_beds" value="{!! $row->options->single_air_beds !!}" type="text" class="form-control" placeholder="">
                                {!! ($errors->has('single_air_beds') ? $errors->first('single_air_beds') : '') !!}
                            </div>
                        </div>

                        <div class="zone-select-listen form-group{!! ($errors->has('zone_id')) ? ' has-error' : '' !!}">
                            <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="zone_id">Campsite Zone: </label>
                            <div class="radio-container col-lg-3 col-md-4 col-sm-5 col-xs-10">
                                {!! Form::select('zone_id', $zones, $row->options->zone_id) !!}
                            </div>
                        </div>

                        <h3>Extras</h3>
                        
                        <div class="cost-listen form-group">
                            <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="size">Select Your Extras</label>
                            <div class="radio-container col-lg-3 col-md-4 col-sm-5 col-xs-10">
                                @foreach($products as $i => $product)
                                    <div class="product-wrap">
                                        <strong>{!! $product->title !!}</strong>
                                        {!! Form::hidden("products[$product->id][cost]", $product->cost, array('data-cost' => $product->cost, 'class' => 'hidden-cost')); !!}
                                        <input type="text" name="products[$product->id][quantity]" value="{!! $row->options->products[$product->id]['quantity'] !!}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    --}}

                        <!-- Basket -->
                        <table class="baskettbl type-sans">



                            <!-- Basket headings -->

                            <tr class="baskettbl_heading">
                                <th class="desc"><span class="baskettbl_title type-sans-b">Item Description</span></th>
                                <th class="qty"><span class="baskettbl_title type-sans-b">Qty</span></th>
                                <th class="remove"><span class="baskettbl_title type-sans-b">Remove</span></th>
                                <th class="price"><span class="baskettbl_title type-sans-b">Unit Price</span></th>
                                <th class="total"><span class="baskettbl_title type-sans-b">Total</span></th>
                            </tr>

                            @foreach($cart as $row)

                            <!-- Large event header -->

                            <tr>
                                <td class="baskettbl_eventtitle" colspan="5">
                                    <span class="type-sans-b">{!! $row->options->eventTitle!!}</span>
                                </td>
                            </tr>

                            <!-- Event details -->

                            <tr class="baskettbl_opt event">
                                <td class="desc">
                                    <img src="http://placehold.it/165x102?text=image" class="img" />
                                    <span class="title type-sans-b">{!! $row->options->eventTitle!!}</span>
                                    <span class="pitch type-sans-b">{!! $row->name !!}</span>
                                    <span class="dates">{!! date('d F Y', strtotime( $row->options->startDate ))
                                                            .' &ndash; '
                                                            .date('d F Y', strtotime( $row->options->endDate )) !!}</span>
                                </td>
                                <td class="qty"><span>{!! $row->qty !!}</td>
                                <td class="remove-item"><a href="/bookings/remove-item/{!! $row->rowid !!}">X</a></td>
                                <td class="price"><span class="currency">£</span><span class="amt">{!! $row->options->tentCost !!}</span></td>
                                <td class="total"><span class="currency">£</span><span class="amt">{!! $row->options->tentCost * $row->qty !!}</span></td>
                            </tr>

                            {{--<tr class="baskettbl_opt dblbed">
                                <td class="desc"><span>Double Airbed</span></td>
                                <td class="qty"><span>{!! $row->options->double_air_beds !!}</span></td>
                                <td class="price"><span class="currency">£</span><span class="amt">100.00</span></td>
                                <td class="total"><span class="currency">£</span><span class="amt">100.00</span></td>
                            </tr>
                            <tr class="baskettbl_opt sglbed">
                                <td class="desc">Single Airbed</td>
                                <td class="qty">{!! $row->options->double_air_beds !!}</td>
                                <td class="price"><span class="currency">£</span><span class="amt">150.00</span></td>
                                <td class="total"><span class="currency">£</span><span class="amt">300.00</span></td>
                            </tr>--}}
                            <!-- Extras -->
                            <tr>
                                <td class="baskettbl_extras-title"><span class="type-sans-b">Extras</span></td>
                            </tr>

                            @foreach($products as $i => $product)
                            <tr class="baskettbl_opt">
                                <td class="desc">{!! $product->title !!}</td>
                                <td class="qty">{!! $row->options->products[$product->id]['quantity'] !!}</td>
                                <td></td>
                                <td class="price"><span class="currency">£</span><span class="amt">{!! $product->cost !!}</span></td>
                                <td class="total"><span class="currency">£</span><span class="amt">{!! $row->options->products[$product->id]['quantity'] * $product->cost !!}</span></td>
                            </tr>
                            @endforeach

                            @endforeach

                        </table>
                    @endif



                    <div class="bookingtbl_total type-sans-b">
                        <div class="booking-subtotal">
                            <span class="bookingtbl_subtotal-label">SubTotal</span>
                            <div class="bookingtbl_subtotal-price">
                                <span class="currency">&pound;</span>
                                <span class="cost">{{ Cart::total() }}</span>
                            </div>
                        </div>
                        <div class="booking-discount">
                            <span class="bookingtbl_discount-label">Discount</span>
                            <div class="bookingtbl_discount-price">
                                <span class="currency">&pound;</span>
                                <span class="cost"></span>
                            </div>
                        </div>
                        <div class="booking-total">
                            <span class="bookingtbl_total-label">Total</span>
                            <div class="bookingtbl_total-price">
                                <span class="currency">&pound;</span>
                                <span class="cost"></span>
                            </div>
                        </div>
                    </div>

                    <p class="bookingtbl_disclaimer type-sans-b">** Event tickets are NOT included in any of the prices above **</p>

                </div>

            </div>

            <div class="basket_section">

                <div class="container">

                    <h2 class="basket_section-title type-sans2-l">Billing Address</h2>

                    <div class="form-group billingform_half {!! ($errors->has('first_name')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="first_name">First Name *</label>
                        <input name="first_name" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('first_name') ? $errors->first('first_name') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('last_name')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="last_name">Last Name *</label>
                        <input name="last_name" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('last_name') ? $errors->first('last_name') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('mobile_phone')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="mobile_phone">Mobile</label>
                        <input name="mobile_phone" value="" type="text" class="form-control type-sans" placeholder="">
                        {!! ($errors->has('mobile_phone') ? $errors->first('mobile_phone') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('dob')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="dob">D.O.B</label>
                        <input name="dob" value="" type="text" class="form-control datetimepicker type-sans" placeholder="">
                        {!! ($errors->has('dob') ? $errors->first('dob') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('phone')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="phone">House Phone</label>
                        <input name="phone" value="" type="text" class="form-control type-sans" placeholder="">
                        {!! ($errors->has('phone') ? $errors->first('phone') : '') !!}
                    </div>
                    <div class="form-group billingform_full {!! ($errors->has('address_line_1')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="address_line_1">Address Line 1 *</label>
                        <input name="address_line_1" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('address_line_1') ? $errors->first('address_line_1') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('address_line_2')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="address_line_2">Address Line 2 *</label>
                        <input name="address_line_2" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('address_line_2') ? $errors->first('address_line_2') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('city')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="city">City *</label>
                        <input name="city" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('city') ? $errors->first('city') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('country')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="country">Country *</label>
                        <input name="country" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('country') ? $errors->first('country') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('postcode')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="postcode">Postcode *</label>
                        <input name="postcode" value="" type="text" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('postcode') ? $errors->first('postcode') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('email')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="email">Email *</label>
                        <input name="email" id="email" type="email" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('email') ? $errors->first('email') : '') !!}
                    </div>
                    <div class="form-group billingform_half {!! ($errors->has('email_confirmation')) ? ' has-error' : '' !!}">
                        <label class="control-label type-sans-b" for="email_confirmation">Email Confirmation *</label>
                        <input name="email_confirmation" id="email_confirmation" type="email" class="form-control type-sans" placeholder="" required>
                        {!! ($errors->has('email_confirmation') ? $errors->first('email_confirmation') : '') !!}
                    </div>

                    {{--
                    <div class="cost-summary" style="margin-top: 40px;">
                        <p>
                            Subtotal: {!! number_format($row->options->preDiscount, 2, '.', '') !!}
                        </p>
                        <p>
                            Discount: {!! number_format($row->options->discount, 2, '.', '') !!}
                        </p>
                        <p>
                            Total: {!! number_format($row->price, 2, '.', '') !!}
                        </p>
                    </div>
                    --}}

                    <!--<div class="form-group">
                        <button class="btn btn-primary shoppingbasket_submit" type="submit" id="shoppingbasket_submit">Proceed to checkout</button>
                    </div>-->

                </div>

            </div>
	        <div class="payment-info">
                <div class="container">
                     <h2 class="payment-info-title type-sans2-l">Payment Information</h2>
                     <p class="payment-info-subtitle">You will be redirected to the Sage Pay website when you place an order</p>
                     <div class="info-footer">
                         <div class="form-group">
                            <button class="btn btn-primary shoppingbasket_submit" type="submit" id="shoppingbasket_submit">Continue to Sage pay</button>
                            <img src="/assets/images/sage-logo.jpg" alt="Sage Logo">
                        </div>
                     </div>
                </div>
            </div> 


        {!! Form::close() !!}

    </section>
    <script>
        $(document).ready(function() {
            var total, discount, subtotal;
            total=0;
            subtotal = $('.bookingtbl_subtotal-price').find('.cost').text();
            subtotal = (subtotal * 100)/90;
            discount = subtotal * 0.1;
            total = subtotal - discount;
            $('.bookingtbl_subtotal-price').find('.cost').text(subtotal);
            $('.bookingtbl_discount-price').find('.cost').text(discount);
            $('.bookingtbl_total-price').find('.cost').text(total);
        });
    </script>

@stop

