                <!-- about-section
                    ================================================== -->
                <div class="section">
                    <div id="rentcar">
                        <div class="container">
                            <div class="title-section">
                                <h1>See our car</h1>
                            </div>

                            <div class="row">
                                @foreach($cars as $car)
                                <div class="col-md-3">
                                    <!--div class="thumbnail"-->
                                        <div class="center-block">
                                        <a href="http://rental-mobil-malang.com" target="_blank">
                                            <img src="https://ik.imagekit.io/kesatriakeyboard/erctour/tr:w-330,h-330/{{ $car->image }}" alt="" class="img-responsive" />
                                        </a>
                                        </div>
                                        <!--div class="caption">
                                            <h4>{{ $car->name }}</h4>
                                            <p>Malang / Batu</p>
                                            <p>Driver: <strong>TERMASUK</strong></p>
                                            <p>BBM: <strong>TIDAK TERMASUK</strong></p>
                                            <p>Paket: <strong>1 HARI</strong></p>
                                            <p class="text-danger"><strong>Rp. {{ number_format($car->price, 0, '', '.') }}</strong></p>
                                            <p><a href="#">ERC Trans</p>
                                            <p><a class="btn btn-primary" href="#">Lihat</a></p>
                                        </div-->
                                    <!--/div-->
                                </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rent-div text-center">
                                        <a class="rent-btn" href="{{ url('/rentcar') }}">Lihat semua armada</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End about -->
