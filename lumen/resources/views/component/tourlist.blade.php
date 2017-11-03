	<!-- Top place to visit -->
	<section class="visit section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Paket Wisata Populer
			</h2>
			<p class="section-subtitle">
				Berikut adalah paket wisata yang paling populer di malang dan batu.
			</p>

			<div class="owl-carousel visit-carousel" id="">
				@for($i = 1; $i <= 4; $i++)
				<div class="item">
					<img src="{{url('assets/img/tour/tour'.$i.'.jpg')}}" alt="tour{{$i}}" class="img-responsive visit-item">
				</div>
				@endfor
			</div>
		</div> <!-- /.container -->
	</section> <!-- /.visit -->