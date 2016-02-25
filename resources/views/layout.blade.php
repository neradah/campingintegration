<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Event Camping</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="{{ asset('assets/scripts/libs/jquery.mixitup.js') }}"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script src="//use.typekit.net/yfe0hwp.js"></script>
    
    <!-- Typography -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!--[if lte IE 8]>
    {!! Html::style('assets/styles/styles-ie.css') !!}
    <![endif]-->
    <!--[if gt IE 8]><!-->
    {!! Html::style('assets/styles/styles.css') !!}
    <!--<![endif]-->

    {!! Html::script('assets/scripts/libs/modernizr.min.js') !!}
    <!--[if lt IE 9]>
    {!! Html::script('//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js') !!}
    {!! Html::script('//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js') !!}
    <![endif]-->

    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">


</head>
<body>


<main>

    @section('content')
    @show

</main>

@include('partials.footer')

@section('bottom')
@show

</body>

</html>