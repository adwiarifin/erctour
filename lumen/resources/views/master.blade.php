<!doctype html>

<html lang="en" class="no-js">
<head>
    <title><?php echo isset($title) ? $title : 'ERC Tour - Spesialis Paket Wisata Malang, Batu, Bromo' ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type="text/css" />
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{url('css/flexslider.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{url('css/jquery.bxslider.css')}}" type="text/css" media="screen">

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{url('css/fullwidth.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{url('css/settings.css')}}" media="screen" />

    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{url('css/responsive.css')}}" type="text/css" media="screen">


    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.migrate.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.imagesloaded.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.bxslider.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLEGIVjBj1qkSf14v7sSQK4iTVAdWg34I"></script>
    <script type="text/javascript" src="{{url('js/gmap3.min.js')}}"></script>

     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="{{url('js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/script.js')}}"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Container
            ================================================== -->
    <div id="container">

        <!-- Header
            ================================================== -->
        <header class="clearfix">
            <!-- Static navbar -->
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img alt="" src="{{url('images/logo.png')}}"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            @yield('navbar')
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        @yield('content')

        <!-- Footer ================================================== -->
        <footer class="bg-color">
            <div class="inner-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <p>&copy; 2013 Flatible, modified by <a href="http://kesatriakeyboard.com">Kesatria Keyboard</a></p>
                        </div>
                        <div class="col-md-5">
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"></a></li>
                                <li><a class="rss" href="#"></a></li>
                                <li><a class="youtube" href="#"></a></li>
                                <li><a class="twitter" href="#"></a></li>
                                <li><a class="google" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

    </div>
    <!-- End Container -->

    <!--
    ##############################
     - ACTIVATE THE BANNER HERE -
    ##############################
    -->
    <script type="text/javascript">

        var tpj=jQuery;
        tpj.noConflict();

        tpj(document).ready(function() {

        if (tpj.fn.cssOriginal!=undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

            var api = tpj('.fullwidthbanner').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight:500,

                    onHoverStop:"on",                        // Stop Banner Timet at Hover on Slide on/off

                    thumbWidth:100,                            // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight:50,
                    thumbAmount:3,

                    hideThumbs:0,
                    navigationType:"no",                // bullet, thumb, none
                    navigationArrows:"solo",                // nexttobullets, solo (old name verticalcentered), none

                    navigationStyle:"round",                // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                    navigationHAlign:"center",                // Vertical Align top,center,bottom
                    navigationVAlign:"bottom",                    // Horizontal Align left,center,right
                    navigationHOffset:30,
                    navigationVOffset:-40,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    touchenabled:"on",                        // Enable Swipe Function : on/off


                    stopAtSlide:-1,                            // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                    stopAfterLoops:-1,                        // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                    hideCaptionAtLimit:0,                    // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                    hideAllCaptionAtLilmit:0,                // Hide all The Captions if Width of Browser is less then this value
                    hideSliderAtLimit:0,                    // Hide the whole slider, and stop also functions if Width of Browser is less than this value


                    fullWidth:"on",

                    shadow:1                                //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                });


                // TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
                // YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
                    api.bind("revolution.slide.onloaded",function (e) {


                        jQuery('.tparrows').each(function() {
                            var arrows=jQuery(this);

                            var timer = setInterval(function() {

                                if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
                                  arrows.fadeOut(300);
                            },3000);
                        })

                        jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
                            jQuery('.tp-simpleresponsive').addClass("mouseisover");
                            jQuery('body').find('.tparrows').each(function() {
                                jQuery(this).fadeIn(300);
                            });
                        }, function() {
                            if (!jQuery(this).hasClass("tparrows"))
                                jQuery('.tp-simpleresponsive').removeClass("mouseisover");
                        })
                    });
                // END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
            });
    </script>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/58902dd4b0913609f6a0d236/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Google Analytic script -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-97578075-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
