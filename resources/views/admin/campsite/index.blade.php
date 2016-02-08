@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered responsive">
                <thead>
                <tr>
                    <td width="5%" class="text-center"> {!! Form::checkbox('select_all', null) !!} </td>
                    @foreach($fields as $field)
                        <td>{{$field}}</td>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)

                    <tr>
                        <td class="text-center">
                            {!! Form::open(['id' => 'delete', 'method' => 'delete', 'route' => ['admin.campsite.destroy', $item->id]]) !!}
                            {!! Form::checkbox('destroy[]', null, false, ['class' => 'destroy']) !!}
                            {!! Form::close() !!}
                        </td>
                        <td><a href="{{route('admin.campsite.edit', [$item->id])}}">{{$item->name}}</a></td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->check_in_time}}</td>
                        <td>{{$item->check_out_time}}</td>


                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
        <div class="col-sm-3">

            {!! Form::button('Delete', ['id' => 'destroy_selected']) !!}

        </div>
    </div>



@stop