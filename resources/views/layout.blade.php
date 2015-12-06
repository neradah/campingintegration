<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Event Camping</title>
    @include('partials.header')
</head>
<body>

@include('partials.site-nav')

<main>

    @include('partials.notifications')

    @section('content')
    @show

</main>

@include('partials.footer')

@section('bottom')
@show

</body>

</html>