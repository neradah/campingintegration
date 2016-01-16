<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>

<div class="container">

    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Demo Event Page</h1>
        </div>
    </div>


    {!! Form::open(['url' => 'test']) !!}



    <div class="row">
        <div class="col-sm-6 ">


            <h2>Select a Campsite</h2>

            <ul>

                @foreach( $event->campsites()->get() as $campsite)

                    <li>
                        {!! Form::label($campsite->id, $campsite->name) !!}
                        {!! Form::radio('campsite', $campsite->id, false, ['id' => $campsite->id, 'class' => 'campsite']) !!}
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 ">


            <h2>Select a Zone</h2>

            <ul>

                @foreach( $event->campsites()->get() as $campsite)
                    @foreach($campsite->zones()->get() as $zone)
                    <li class="zones zone-campsite-{{$campsite->id}}">
                        {!! Form::label($zone->id, $zone->name) !!}
                        {!! Form::radio('zone', $zone->id, false, ['id' => $zone->id, 'class' => 'zone']) !!}
                    </li>
                    @endforeach
                @endforeach
            </ul>

        </div>
    </div>


    <div class="row">
        <div class="col-sm-6 ">


            <h2>Select a Pitch</h2>

            <ul>

                @foreach($pitchGroups as $pitch)
                    <li>
                        {!! Form::label($pitch->id, $pitch->name) !!}
                        {!! Form::radio('pitch', $pitch->id, false, ['id' => $pitch->id, 'class' => 'pitches']) !!}
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <h2>Select a Tent</h2>
            <ul>
                @foreach($event->Tents()->get() as $tent)

                    <li class="pitch-group pitch-group-{{$tent->pitch_id}}">
                        {!! Form::label($tent->id, $tent->name) !!}
                        {!! Form::radio('tent', $tent->id, false, ['id' => $tent->id, 'class' => 'tents']) !!}
                        <div>{{$tent->qty}} left</div>
                    </li>

                @endforeach
            </ul>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 ">
            <h2>Select Products</h2>
            <ul>
                @foreach($event->Products()->get() as $product)

                    <li class="pitch-group pitch-group-{{$product->pitch_id}}">
                        {!! Form::label($product->id, $product->name) !!}
                     {!! Form::selectRange('products['.$product->id.']', 0, 20 , null , ['class' => 'form-control']) !!}
                    </li>

                @endforeach
            </ul>

        </div>
    </div>

    {!! Form::submit() !!}

    {!! Form::close() !!}

    <style>
        .pitch-group, .zones{
            display:none;
        }
    </style>

    <script>
        $('[name=pitch]').on('click', function(){
            var group = $(this).val();
            $('.pitch-group').hide();
            $('.pitch-group-'+group).show();

        });
        $('[name=campsite]').on('click', function(){
            var group = $(this).val();
            $('.zones').hide();
            $('.zone-campsite-'+group).show();

        });

    </script>






    <div class="row">
        <div class="col-sm-12">
            <pre>{!! var_dump($event->toArray()) !!}</pre>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <pre>{!! var_dump($event->campsites()->first()->toArray()) !!}</pre>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <pre>{!! var_dump($event->Products()->get()->toArray()) !!}</pre>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <pre>{!! var_dump($event->Tents()->get()->toArray()) !!}</pre>
        </div>
    </div>


</div>







</body>
</html>