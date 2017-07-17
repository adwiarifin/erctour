<div class="section">
    <div id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 tourdetail">

                    <div class="title-section">
                        <h1>{{ $tour->title }}</h1>
                    </div>
                    <hr>

                    <img class="img-responsive" src="https://ik.imagekit.io/kesatriakeyboard/erctour/tr:w-1366/{{ $tour->image }}" alt="">
                    <hr>

                    <div class="well">
                        <div><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Location:</strong> {{ $tour->location }}</div>
                        <div><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Duration:</strong> {{ $tour->duration }}</div>
                        <div><i class="fa fa-tag" aria-hidden="true"></i> <strong>Price:</strong> {{ number_format($tour->price,0,',','.') }}</div>
                    </div>

                    <div class="well">
                        <p>
                            Tour ini disediakan oleh<br/>
                            <a href="#"><strong>ERC TOUR</strong></a><br/>
                            Jl. Untung Suropati Selatan No. 6 Malang, East Java, Indonesia<br/>
                        </p>
                        <p>
                            <a href="tel:+62341341944" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i> Call 0341 341944</a> 
                            <a href="tel:+6281233930143" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i> Call 081233930143</a>
                            <a href="https://api.whatsapp.com/send?phone=6281233930143" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> Chat via whatsapp</a>
                        </p>
                        <p>Paket Tour Ini Telah Dilihat Oleh <strong>50</strong> Pengunjung</p>
                    </div>
                    <hr>

                    <!-- Post Content -->
                    <p class="lead">Overview</p>
                    {!! $tour->overview !!}
                    <p>&nbsp;</p>
                    <p class="lead">Itinerary</p>
                    {!! $tour->itinerary !!}
                    <p>&nbsp;</p>
                    <p class="lead">Price &amp; Details</p>
                    {!! $tour->details !!}
                    <p>&nbsp;</p>
                    <p class="lead">Terms &amp; Condition</p>
                    {!! $tour->terms !!}
                    <p>&nbsp;</p>
                    
                    <h2>Social Share</h2>
                    <div class="social-shares">
                        <ul>
                            <li>
                                <a href="http://www.facebook.com/share.php?u={{ app('request')->url() }}" target="_blank">
                                    <img class="no-preload" src="{{ url('/images/social/facebook.png') }}" width="32" height="32">
                                </a>
                            </li>
                            <li>
                                <a href="http://twitter.com/share?url={{ app('request')->url() }}" target="_blank">
                                    <img class="no-preload" src="{{ url('/images/social/twitter.png') }}" width="32" height="32">
                                </a>
                            </li>
                            <li>
                                <a href="http://digg.com/submit?url={{ app('request')->url() }}&amp;title={{ rawurlencode($tour->title) }}" target="_blank">
                                    <img class="no-preload" src="{{ url('/images/social/digg.png') }}" width="32" height="32">
                                </a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ app('request')->url() }}&amp;title={{ rawurlencode($tour->title) }}" target="_blank">
                                    <img class="no-preload" src="{{ url('/images/social/linkedin.png') }}" width="32" height="32">
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/share?url={{ app('request')->url() }}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                                    <img class="no-preload" src="{{ url('/images/social/google-plus.png') }}" alt="google-share" width="32" height="32">
                                </a>
                            </li>
                            <li>
                                <a href="http://pinterest.com/pin/create/button/?url={{ app('request')->url() }}&amp;media={{ url($tour->image) }}" class="pin-it-button" count-layout="horizontal" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
                                    <img class="no-preload" src="{{ url('/images/social/pinterest.png') }}" width="32" height="32">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div>&nbsp;</div>

                    <h2>Other Tour</h2>
                    <div class="projects-container">
                        @foreach ($other as $post)
                        <div class="project-post {{ strtolower($tour->tag) }}">
                            <img alt="" src="https://ik.imagekit.io/kesatriakeyboard/erctour/tr:w-270,h-204/{{$post->image}}">
                            <div class="project-content">
                                <div class="inner-project">
                                    <h3>{{ $post->title }}</h3>
                                    <span>Rp {{ number_format($post->price,0,',','.') }},-</span>
                                    <p><i class="fa fa-map-marker"></i> {{ $post->location }} <i class="fa fa-clock-o"></i> {{ $post->duration }}</p>
                                    <a class="link-project" href="{{ url('/tour/'.$tour->slug) }}">view tour</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div id="disqus_thread"></div>
                    <script>
                    
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    
                    var disqus_config = function () {
                    this.page.url = '{{ app('url')->full() }}';
                    this.page.identifier = '/tour/{{ $tour->slug }}';
                    this.page.title = '{{ $tour->title }}';
                    };
                    
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://erctour.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                
                </div>
            </div>
        </div>
    </div>
</div>
