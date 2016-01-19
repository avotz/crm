@extends('layouts.template')


@section('content')

 @include('layouts/partials/_breadcumbs', ['page' => 'Properties'])

    {!! Form::open(['route'=>'properties.store','files'=> true, 'class'=>'form-horizontal']) !!}

        @include('properties/partials/_form')

    {!! Form::close() !!}
	@include('sellers/partials/_modal')


@endsection
@section('scripts')
<script src="/vendor/jquery.maskedinput.min.js"></script>
	<script type="text/javascript">
		
		$("#owner_phone1").mask("9999-9999");
		$("#owner_phone2").mask("9999-9999");
		
	</script>
@stop