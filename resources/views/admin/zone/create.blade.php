{{-- */$random = str_random(10);/* --}}
@extends('admin.layout')

@section('content')

    @include('admin.includes.header_crud', ['title' => 'Zones', 'route' => 'admin.zone'])

    @include('admin.includes.form.text', ['name' => 'name', 'label' => 'Name'])

    @include('admin.includes.footer_crud')

@stop