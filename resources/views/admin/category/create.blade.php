@extends('admin.layout')

@section('content')

 @include('admin.includes.header_crud', ['title' => 'Categories', 'route' => 'admin.category'])

 @include('admin.includes.form.text', ['name' => 'name', 'label' => 'Category Name'])

 @include('admin.includes.footer_crud')

@stop