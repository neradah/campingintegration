
@section('top')
<div class="page-header">
<h1>{{$event->title}} Bookings</h1>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-xs-8">
        <p class="lead">
            @if (count($bookings) == 0)
                There are currently no bookings.
            @else
                Here are the bookings for {{$event->name}}
            @endif
        </p>
    </div>
</div>
@foreach($bookings as $booking)
    <h2>{!! $booking->customer->first_name.' '.$booking->customer->last_name.' - '.$booking->customer->email !!}</h2>
    <p>
        <strong>{!! $booking->date_of_booking->format('l jS F Y H:i') !!}</strong>
    </p>
    <p>
        <a class="btn btn-success" href="{!! URL::route('bookings.show', array('bookings' => $booking->id)) !!}"><i class="fa fa-file-text"></i> Show</a>
        @auth('edit')
             <a class="btn btn-info" href="{!! URL::route('bookings.edit', array('bookings' => $booking->id)) !!}"><i class="fa fa-pencil-square-o"></i> Edit</a> <a class="btn btn-danger" href="#delete_booking_{!! $booking->id !!}" data-toggle="modal" data-target="#delete_booking_{!! $booking->id !!}"><i class="fa fa-times"></i> Delete</a>
        @endauth
    </p>
    <br>
@endforeach

@stop

@section('bottom')
@auth('edit')
    @include('bookings.deletes')
@endauth
@stop