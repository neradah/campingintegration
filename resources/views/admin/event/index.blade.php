@extends('admin.layout')

@section('content')


        <div class="row">
            <div class="col-md-12">

                <table class="table table-bordered responsive">
                    <thead>
                    <tr>
                        <th width="15%">ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>ZIP</th>
                        <th width="33%">Country</th>
                    </tr>
                    </thead>
                    <tbody>
               @foreach($events as $event)

                   <tr>
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