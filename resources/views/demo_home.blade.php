<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>

<div class="container">

    <h1>HomePage</h1>

    <div class="row">
        <div class="col-sm-12">
            {!! Form::open() !!}

            <div class="form-group">
                {!! Form::select('category', $categories, null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('search') !!}

            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <h2>Homepage Carousel</h2>

            <pre>{!! var_dump($carousel) !!}</pre>


        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <h2>Early Bird</h2>

            <pre>{!! var_dump($earlyBird) !!}</pre>


        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <h2>Most Recent</h2>

            <pre>{!! var_dump($mostRecent) !!}</pre>


        </div>
    </div>

</div>


</body>
</html>