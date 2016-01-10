@extends('admin.layout')

@section('content')

    <div class="row">
    <div class="col-md-12">

        <table class="table table-bordered responsive">
            <thead>
            <tr>
                <td></td>
                @foreach($fields as $field)
                    <td>{{$field}}</td>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)

                <tr>
                    <td>{!! Form::checkbox('checkbox') !!}</td>
                    <td>95</td>
                    <td>Thaddeus</td>
                    <td>Chase</td>
                    <td>66762</td>
                    <td>Netherlands Antilles</td>
                </tr>

            @endforeach
            </tbody>
        </table>

    </div>
</div>



    @stop