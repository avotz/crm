@extends('layouts.template')

@section('css')
    <link rel="stylesheet" href="/vendor/bootstrap-select/bootstrap-select.css">

@stop
@section('content')
    @include('layouts/partials/_breadcumbs', ['page' => 'Vendedores'])

        {!! Form::model($seller, ['method' => 'put', 'route' => ['sellers.update', $seller->id],'files'=> true, 'class'=>'form-horizontal' ]) !!}
        		 @include('sellers/partials/_form',['buttonText' => 'Actualizar Vendedor'])
        {!! Form::close() !!}
		@include('sellers/partials/_modal')

@stop
@section('scripts')
    <script src="/vendor/bootstrap-select/bootstrap-select.js"></script>

@stop