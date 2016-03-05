{!! Form::open(array('url' => '', 'class' => 'form-horizontal')) !!}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Select You Zone</h2>
        </div>
        <div class="col-md-12">

            @foreach($campSite->zones()->get() as $zone)
                <div class="radio">
                    <label>
                        {!! Form::radio('zone', $zone->id, null) !!}
                        {{$zone->name}}
                    </label>
                </div>
            @endforeach

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>Select Your Pitch Group</h2>
        </div>
        <div class="col-md-12">
            @foreach($pitchGroup->get() as $pitch)

                <div class="radio">
                    <label>
                        {!! Form::radio('pitch', $pitch->id, null) !!}
                        {{$pitch->name}}
                    </label>
                </div>

            @endforeach

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <h2>Select Your Tent</h2>
        </div>
        <div class="col-md-12">
         @foreach($event->tents()->get() as $tent)



                <div class="radio tents tent-pitch-{{$tent->pitch_id}}">
                    <label>
                        {!! Form::radio('tent', $tent->id, null) !!}
                        {{$tent->name}}  -- {{$tent->cost}} -- Qty Left {{$tent->qty}}
                    </label>
                </div>


            @endforeach

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 ">
            <h2>Select Products</h2>
            <ul>
                @foreach($event->Products()->get() as $product)

                    <li class="pitch-group-product pitch-group-product-{{$product->pitch_id}}">
                        {!! Form::label($product->id, $product->name) !!}
                        {!! Form::selectRange('products['.$product->id.']', 0, 10 , null , ['class' => 'form-control']) !!}
                    </li>

                @endforeach
            </ul>

        </div>
    </div>

    {!! Form::submit('Buy Now') !!}

</div>


<script>
    $('.pitch-group-product').hide();
    $('.tents').hide();

    $('[name=pitch]').on('change', function(){
        $('.pitch-group-product').hide();
        $('.tents').hide();
        $('.tent-pitch-'+$(this).val()).show();
        $('.pitch-group-product-'+$(this).val()).show();
    });
</script>

        
{!! Form::close() !!}


<style>
    .row{
        padding-bottom: 35px;
    }
</style>