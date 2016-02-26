@extends('layout')
@section('content')

@include('partials.site-nav')
<header class="pageheader">
        <div class="pageheader_purple">
            <div class="container">
                <h1 class="shoppingheader_title type-sans2-l">For All Inquiries<br/><span class="type-sans2-b">Contact Us</span></h1>
            </div>
        </div>
    </header>
    <div class="contact container">
        <div class="row">
            <div class="col-xs-12">
                <div class="contact_banner">
                    <img src="/assets/images/contact-header.jpg" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="contact_content">
                        {!! Form::open(array('url' => 'foo/bar')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                {!! Form::label('name','Name', array('class' => 'required')) !!}
                                {!! Form::text('name') !!}
                                
                                {!! Form::label('booking','Booking Reference Number') !!}
                                {!! Form::text('booking') !!}
                            </div>
                            <div class="col-xs-12 col-md-6">
                                {!! Form::label('email','Your Email Address', array('class' => 'required')) !!}
                                {!! Form::text('email') !!}
                                
                                {!! Form::label('subject','Subject') !!}
                                {!! Form::text('subject') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                {!! Form::label('message','Message', array('class' => 'required')) !!}
                                {!! Form::textarea('message','') !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                {!! Form::submit('SEND') !!}
                                <p class="required-notice">Required Fields</p>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Prevents all non input elements from tabbing
    $(document).ready(function() {
       $('mainheader_mainnav-list a').attr('tabindex',-1);
       $('footer a').attr('tabindex',-1); 
    });
</script>
@stop