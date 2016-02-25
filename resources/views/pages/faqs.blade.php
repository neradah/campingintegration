@extends('layout')
@section('content')
        <!-- HOMEPAGE-SPECIFIC HEADER -->
@include('partials.site-nav')
<header class="pageheader">
        <div class="pageheader_purple">
            <div class="container">
                <h1 class="shoppingheader_title type-sans2-l">Let Us Help To Answer Your<br/><span class="type-sans2-b">Frequently Asked Questions</span></h1>
                <img src="/assets/images/home_lower_faq.png" alt="Tent Icon" class="faq_tent">
            </div>
        </div>
    </header>
    <div class="faq container">
        <div class="row">
            <div class="col-xs-12">
                <div class="faq_banner">
                    <img src="/assets/images/contact-header.jpg" />
                </div>
            </div>
            <div class="col-xs-12">
                <div class="faq_content">
                    <ul>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">1.  What pitches and equipment do you have available to hire?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We hire Pre-pitched Tents or Pitch-only options for up to 2, 4, 6 or 8 people. You can also hire extras such as airbeds, bed linen, breakfast and gas powered stoves or BBQ’s. We also offer Pre-pitched “Glamping”, for those who require “fabulous”, for up to 2, 4, 6 or 8 people with all extras included in the package. Not all pitch options or extras are available at all events so please check the event information on our website for available options.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">2.  How big are the airbeds provided?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Double airbeds are 190cm x 135cm.<br/>Single airbeds 190cm x 73cm.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">3.  What comes in the Duvet and Linen packs?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We offer single or double Duvet and Linen packs which contain a fitted sheet, duvet and duvet cover, pillow and pillow case per person.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">4.  Can I take any items home with me?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">All our equipment is rented and should be left for our staff to pack down at the end of the event.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">5.  What is offered in the Breakfast tent?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We offer a buffet selection of sausages, fried eggs, baked beans, toast or bread rolls, butter and/or jam/honey, or an assortment of cereals and pastries for those who prefer a lighter breakfast. We also provide juice, coffee and tea.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">6.  Are toilet and shower facilities available?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Shower and toilet facilities are provided at all of our campsites.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">7.  Is there security on the campsites?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We provide 24 hour on-site security and stewards at all of our campsites.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">8.  Should I bring a padlock for my tent?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Please don’t bring a padlock for your tent. It is a sign to thieves to rob the tent. They will just cut their way in and steal all your valuables. We recommend that car keys, cash, credit cards, mobile phones, wallets, purses and other valuable items are kept with you at all times. Do not leave your valuables unattended in vehicles or tents. Check the event information on our website for the availability of storage facilities for valuables.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">9.  Is free parking available?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">At the majority of our events we will offer FREE parking, but not all.  Some events will offer additional paid parking options or parking may be unavailable.  Please check the event information on our website for available options.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">10.  Can my friends who have not booked a tent visit us in the campsite?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We regret that only people who have booked pitches with us will be allowed into our campsites. This is for the security of our campers and to enable us to control the use of the services provided. Wristbands will be provided at check-in to enable us to identify your party.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">11.  Can I bring my dog to the campsite?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Sorry, but we do not allow pets within our campsites.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">12.  Can I have a BBQ or campfire in the campsites?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We do not allow BBQs or campfires within our campsites unless when using equipment selected from our extras for rental. This is for insurance and safety reasons. Please check the event information on our website for available options.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">13.  Do I need a UK address to make a booking?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">You can make a booking from anywhere in the world. Please enter your home address as we may need to verify it with you if making any amendments to your booking.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">14.  How can I pay for my booking?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We accept payment by debit or credit card online at the time of making your booking. Please check the card logos on the bottom of our homepage or on the booking page for accepted cards.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">15.  Do you take deposits for a booking?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We do not accept deposits and require full payment at the time of booking.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">16.  Do you post booking confirmation or tickets?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">We do not post booking confirmation or tickets to you. Upon the completion of your booking you will be emailed a booking confirmation with your booking reference number. This should be printed and brought with you to check-in to your pitch.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">17.  I didn’t receive a booking confirmation email, what should I do?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Please check your spam/bulk/junk/quarantine email folders for your booking confirmation email. If you still cannot find your booking confirmation email info@eventcampsites.com to advise us of non-receipt of booking confirmation and include your name, address and the event you are attending.  We will then re-send your booking confirmation within 24 hours.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">18.  Can I request where my tent is pitched?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">All our tents are pitched together in campsite zones. When making your booking select your preferred zone in the campsite (e.g. Standard, Family) and your pitch will be allocated within the zone selected.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">19.  Can I request my tent is pitched with friends who have booked previously?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Yes you can. If your friends have already booked please provide their booking number in the comments section of your booking and we will do our best to place you together if space is available. Multiple tent pitches purchased on the same booking will be placed together if space is available.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">20.  Can I change or add items to my booking?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">To change your booking or add extras (e.g. change your order from a 4 man to a 6 man tent or book additional) please email info@eventcampsites.com with your booking reference number, the event you are attending and details of what you wish to change your booking to. You can change your booking for an administration fee of £10.00, plus the difference in the cost of your additional requirements.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">21.  Refunds are subject to our Terms and conditions:<span class="chevron"></span></p>
                            <p class="faq_a type-sans">If you request to cancel a booking 15 days or more prior to your rental start date a full refund will be provided.<br/>If you request to cancel a booking between 7-14 days prior to your rental start date a cancellation fee of 50% of the prepaid rental amount will apply. No refunds will be given if the reservation is cancelled less than 7 days prior to your rental start date or if you fail to arrive at the event on the rental start date and do not provide advance notice. </p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">22.  How do I find my accommodation when I arrive?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Campsite location information can be found on the booking confirmation sent to you, or in the event information on our website. Upon arrival at the campsite please present your booking confirmation form to our on-site staff who will show you to your pitch.  All our pitches are pre-allocated to bookings prior to your arrival and reserved for you no matter what day you arrive at the event, but please ensure you arrive during the check in time-slots provided in your booking confirmation or on the event information on our website.</p>
                        </li>
                        <li class="faq_item">
                            <p class="faq_q type-sans-b">23.  When can I check-in to my tent?<span class="chevron"></span></p>
                            <p class="faq_a type-sans">Usual check-in times are 8am - 12midnight, however please check Arrival Info on the information section of the event you are attending or on your booking confirmation form, as check-in times can vary.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="faq_disclaimer">
                <p>If your question has still been unanswered, for all other enquiries please contact us at : <a href="mailto:enquiries@eventcampsites.co.uk">enquiries@eventcampsites.co.uk</p>
            </div>
    </div>
</div>
<script>
     // Dropdown for FAQ page
        $(document).ready(function() {
            $('.faq_q').on('click', function() {
                $(this).next().slideToggle(250);
                $(this).find('.chevron').animate({
                    transform: 'rotate(-45deg)'
                });
            });
        });

</script>
@stop