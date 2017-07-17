        <!-- portfolio-section
            ================================================== -->
        <div class="section">
            <div id="portfolio">
                <div class="container">
                    <div class="title-section">
                        <h1>Favourite Tour</h1>
                    </div>
                    <ul class="filter">
                        <li><a href="#" class="active" data-filter="*">All Categories</a></li>
                        @foreach ($tags as $tag)
                        <li><a href="#" data-filter=".{{ strtolower($tag) }}">{{$tag}}</a></li>
                        @endforeach
                    </ul>

                    <div class="projects-container">
                        @foreach ($tours as $tour)
                        <div class="project-post {{ strtolower($tour->tag) }}">
                            <img alt="" src="https://ik.imagekit.io/kesatriakeyboard/erctour/tr:w-270,h-204/{{$tour->image}}">
                            <div class="project-content">
                                <div class="inner-project">
                                    <h3>{{ $tour->title }}</h3>
                                    <span>Rp {{ number_format($tour->price,0,',','.') }},-</span>
                                    <p><i class="fa fa-map-marker"></i> {{ $tour->location }} <i class="fa fa-clock-o"></i> {{ $tour->duration }}</p>
                                    <a class="link-project" href="{{ url('/tour/'.$tour->slug) }}">view tour</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End portfolio -->
