    @if ( (isset($page) ? $page : ' ') !== 'home')
        <div class="work-together-section">
            <div class="container">
                <div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="sections-link-pages"><div class="cl-effect-11"><a href="{{URL::to('/contact')}}" data-hover="Let's work together">Let's work together</a></div></div>
                </div>
            </div>
        </div>
        <!-- ================================================== -->

        <footer class="footer" id="footer">
            <a class="scroll" href="#work">
                <div class="back-top">&#xf102;</div>
            </a>
            <div class="container">
                <div class="row">
                    <div class="one-third column" data-scrollreveal="enter left and move 250px over 1.5s">
                        <a href="{{URL::to('/')}}" data-hover="Back to Home">
                            <div class="logo-footer u-full-width"></div>
                        </a>
                    </div>
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <p><i class="icon-footer">&#xf041;</i><span>Innovi</span><br/>
                        Rupayan Kamaruddin Tower(3rd floor)<br/>
                        Plot B/A-20, Holding 8/A<br/>
                        D.I.T Road Malibagh Chowdhury Para<br/>
                        Dhaka-1219, Bangladesh<br/>
                        +880 167 0555 774</p>
                    </div>
                    <div class="one-third column text-center" data-scrollreveal="enter right and move 250px over 1.5s">
                        <div class="social-bottom">
                            <ul class="list-social">
                                <li class="icon-soc tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="www.twitter.com/BDinnovi">&#xf099;</a>
                                </li>
                                <li class="icon-soc tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="www.facebook.com/BDinnovi">&#xf09a;</a>
                                </li>
                                <li class="icon-soc tipped" data-title="instagram"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="instagram.com/innovilondon">&#xf16d;</a>
                                </li>
                                <li class="icon-soc tipped" data-title="google+"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                    <a href="http://plus.google.com/106455040133244800103">&#xf0d5;</a>
                                </li>
                            </ul>
                        </div>
                        <p><i class="icon-footer">&#xf0e0;</i><a href="mailto:support@innovi.com.bd" title="">support@innovi.com.bd</a><br/>
                    </div>
                </div>
                <!-- ================================================== -->

                <div class="row">
                    <div class="text-center" data-scrollreveal="enter top and move 250px over 3s">
                        <p>&copy; 2017 Innovi. All rights are reserved. All other trademarks are copyright of their registered owners. Innovi is registered in Bangladesh. Registered Office: Rupayan Kamaruddin Tower, D.I.T Road Malibagh Chowdhury Para, Dhaka-1219, Bangladesh.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ================================================== -->
    @endif

    <!-- JAVASCRIPT
    ================================================== -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/royal_preloader.min.js"></script>
    <script type="text/javascript">
        (function($) { "use strict";
            Royal_Preloader.config({
                mode: 'number', // 'number', "text" or "logo"
                timeout:        0,
                showInfo:       true,
                showPercentage: true,
                opacity:        1,
                background:     ['#000000']
            });
        })(jQuery);
    </script>
    <script type="text/javascript" src="js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    @if ( (isset($page) ? $page : ' ') == 'home')

    @endif
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/uiMorphingButton_fixed.js"></script>
    <script type="text/javascript" src="js/flippy.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/tipper.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/scrollReveal.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/colorfinder-1.1.js"></script>
    <script type="text/javascript" src="js/gridScrollFx.js"></script>
    <script type="text/javascript" src="js/waypoints.js"></script>
    <script type="text/javascript" src="js/counterup.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
    <script type="text/javascript">
    (function($) { "use strict";
        new GridScrollFx( document.getElementById( 'grid' ), {
            viewportFactor : 0.4
        } );
    })(jQuery);
    </script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDyKLBBB5YNAnWZhMqiwDMli0zUtQLKFgU"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>

    @stack('scripts')

    <!-- End Document
    ================================================== -->
