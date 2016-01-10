@extends('admin.layout')

@section('content')

 @include('admin.includes.header_crud', ['title' => 'Pitch Group', 'route' => 'admin.pitch'])

 @include('admin.includes.form.text', ['name' => 'name', 'label' => 'Group Name'])

 @include('admin.includes.footer_crud')

@stop