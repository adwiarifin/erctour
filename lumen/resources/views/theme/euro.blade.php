<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>Rais Wisata</title>

	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/owl.carousel')}}.css">
	<link rel="stylesheet" href="{{url('assets/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/flexslider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/services.css')}}">
    <link rel="stylesheet" href="assets/css/about.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body>
	@include('component.navbar')

	@include('component.slider')

	@include('component.searchbar')

	@yield('content')

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="text-left">
						&copy; Copyright Euro Travels
					</div>
				</div>
				<div class="col-xs-4">
					Theme by <a href="http://www.themewagon.com">THEMEWAGON</a> Edited by <a href="https://kesatriakeyboard.com">Kesatria Keyboard</a>
				</div>
				<div class="col-xs-4">
					<div class="top">
						<a href="#header">
							<i class="ion-arrow-up-b"></i>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</footer>

	<script src="{{url('assets/js/jquery-1.11.2.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/contact.js')}}"></script>
    <script src="{{url('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{url('assets/js/script.js')}}"></script>

</body>
</html>