@extends('theme.euro')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				@include('component.testimonial')
			</div>

			<div class="col-md-4 col-sm-12">
				@include('component.offer')
			</div>

			<div class="col-md-4 col-sm-12">
				@include('component.aboutus')
			</div>
		</div>
	</div>

	@include('component.tourlist')

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12">
				@include('widget.contact')

				@include('widget.rentcar')

				@include('widget.tour')
			</div>

			<div class="col-md-6 col-sm-12">
				@include('component.gallery')
			</div>

			<div class="col-md-3 col-sm-12">

				@include('widget.facebook')

				@include('widget.instagram')
			</div>
		</div>
	</div>	

	@include('component.social')

@endsection