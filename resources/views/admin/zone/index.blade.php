@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered responsive table-hover">
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
                           {!! Form::open(['id' => 'delete', 'method' => 'delete', 'route' => ['admin.zone.destroy', $item->id]]) !!}
                           {!! Form::checkbox('destroy[]', null, false, ['class' => 'destroy']) !!}
                           {!! Form::close() !!}
                       </td>
                        <td><a href="{{route('admin.zone.edit', [$item->id])}}">{{$item->name}}</a></td>
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