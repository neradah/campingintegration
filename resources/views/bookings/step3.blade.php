@extends('layout')
@section('title')
Book Your Pre-Pitched Tent And Extras For This Event Today
@stop


@section('content')
@include('partials.site-nav')
<!-- - - - - - - - - - - -->
<!-- Booking Page Header -->
<!-- - - - - - - - - - - -->

<header class="pageheader">
    <div class="pageheader_purple">
        <div class="container">
            <h1 class="shoppingheader_title type-sans2-l">Welcome to your<br/><span class="type-sans2-b">Shopping Basket</span></h1>
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
<!-- Shopping Summary -->
<!-- - - - - - - - - - -->
<section class="shoppingbasket" data-init="shopping-basket">
    <div class="basket_section">
        <div class="container">
            <h2 class="basket_section-title type-sans2-l">Shopping Bag</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="baskettbl type-sans">
                            <tbody>
                            <tr class="baskettbl_heading">
                                <th class="desc"><span class="baskettbl_title type-sans-b">Item Description</span></th>
                                <th class="qty"><span class="baskettbl_title type-sans-b">Qty</span></th>
                                <th class="remove"><span class="baskettbl_title type-sans-b">Remove</span></th>
                                <th class="price"><span class="baskettbl_title type-sans-b">Unit Price</span></th>
                                <th class="total"><span class="baskettbl_title type-sans-b">Total</span></th>
                            </tr>
                            <tr>
                                <td class="baskettbl_eventtitle" colspan="5">
                                    <span class="type-sans-b">{{ $event->name }}</span>
                                </td>
                            </tr>
                            <tr class="baskettbl_opt event">
                                <td class="desc">
                                    <img src="/uploads/{{$event->thumbnail}}" class="img">
                                    <span class="title type-sans-b">{{ $event->name }}</span>
                                    <span class="pitch type-sans-b">Pitch for 0 People</span>
                                    <span class="dates">{!! $event->start->toFormattedDateString() !!}  &ndash; {!!  $event->end->toFormattedDateString() !!}</span>
                                </td>
                                <td class="qty"><span>1</span></td>
                                <td class="remove-item"><a href="/bookings/remove-item/56d5d9be6495dfa017fda4f94a987526">X</a></td>
                                <td class="price"><span class="currency">£</span><span class="amt">57</span></td>
                                <td class="total"><span class="currency">£</span><span class="amt">57</span></td>
                            </tr>
                            <tr>
                                <td class="baskettbl_extras-title"><span class="type-sans-b">Extras</span></td>
                            </tr>
                            @foreach($productsArray as $product)
                                <tr class="baskettbl_opt">
                                    <td class="desc">{{$product->name}}</td>
                                    <td class="qty">{{$product->qty}}</td>
                                    <td></td>
                                    <td class="price"><span class="currency">£</span><span class="amt">{{$product->cost}}</span></td>
                                    <td class="total"><span class="currency">£</span><span class="amt">{{$product->total}}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="bookingtbl_total type-sans-b">
                            <div class="booking-subtotal">
                                <span class="bookingtbl_subtotal-label">SubTotal</span>
                                <div class="bookingtbl_subtotal-price">
                                    <span class="currency">£</span>
                                    <span class="cost"></span>
                                </div>
                            </div>
                            <div class="booking-discount">
                                <span class="bookingtbl_discount-label">Discount <span class="this_discount">({!! $event->discount !!}<span>%)</span>
                                <div class="bookingtbl_discount-price">
                                    <span class="currency">£</span>
                                    <span class="cost"></span>
                                </div>
                            </div>
                            <div class="booking-total">
                                <span class="bookingtbl_total-label">Total</span>
                                <div class="bookingtbl_total-price">
                                    <span class="currency">£</span>
                                    <span class="cost"></span>
                                </div>
                            </div>
                        </div>
                        <p class="bookingtbl_disclaimer type-sans-b">** Event tickets are NOT included in any of the prices above **</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="basket_section">
        <div class="container">
            <h2 class="basket_section-title type-sans2-l">Billing Address</h2>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="first_name">First Name *</label>
                <input name="first_name" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="last_name">Last Name *</label>
                <input name="last_name" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="mobile_phone">Mobile</label>
                <input name="mobile_phone" value="" type="text" class="form-control type-sans" placeholder="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="dob">D.O.B</label>
                <input name="dob" value="" type="text" class="form-control datetimepicker type-sans" placeholder="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="phone">House Phone</label>
                <input name="phone" value="" type="text" class="form-control type-sans" placeholder="">
                
            </div>
            <div class="form-group billingform_full ">
                <label class="control-label type-sans-b" for="address_line_1">Address Line 1 *</label>
                <input name="address_line_1" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="address_line_2">Address Line 2 *</label>
                <input name="address_line_2" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="city">City *</label>
                <input name="city" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="country">Country *</label>
                <input name="country" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="postcode">Postcode *</label>
                <input name="postcode" value="" type="text" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="email">Email *</label>
                <input name="email" id="email" type="email" class="form-control type-sans" placeholder="" required="">
                
            </div>
            <div class="form-group billingform_half ">
                <label class="control-label type-sans-b" for="email_confirmation">Email Confirmation *</label>
                <input name="email_confirmation" id="email_confirmation" type="email" class="form-control type-sans" placeholder="" required="">
            </div>
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