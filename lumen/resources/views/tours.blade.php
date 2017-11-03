@extends('theme.euro')

@section('content')

	<div class="container">
		<div class="col-md-9">
			@include('component.tourgrid')
		</div>

		<div class="col-md-3">
			@include('widget.contact')

			@include('widget.facebook')

			@include('widget.instagram')
		</div>
	
	</div>

	@include('component.social')

@endsection