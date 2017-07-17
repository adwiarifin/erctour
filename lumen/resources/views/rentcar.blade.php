<div class="section">
    <div id="home">
        <div class="container">
            <div class="title-section">
                <h1>Rent Car</h1>
            </div>

            <div class="row">
                @foreach($cars as $car)
                <div class="col-md-3 p15">
                    <div class="thumbnail">
                        <img src="https://ik.imagekit.io/kesatriakeyboard/erctour/tr:w-270,h-270/{{ $car->image }}" alt="" class="img-responsive" />
                        <div class="caption">
                            <h3><a href="#">{{ $car->name }}</a></h3>
                            <p>Malang / Batu</p>
                            <p>Driver: <strong>TERMASUK</strong></p>
                            <p>BBM: <strong>TIDAK TERMASUK</strong></p>
                            <p>Paket: <strong>1 HARI</strong></p>
                            <p class="text-danger"><strong>Rp. {{ number_format($car->price, 0, '', '.') }}</strong></p>
                            <p><a href="#">ERC Trans</p>
                            <p><a class="btn btn-primary" href="#">Lihat</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
