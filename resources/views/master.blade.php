<!DOCTYPE html>
<!-- <html lang="{{ config('app.locale') }}"> -->
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Innovi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->


        <meta charset="utf-8">
        <title>Innovi - About Us</title>
        <meta name="description" content="Innovi is an advertising agency, providing outstanding graphics design, printing and advertising services at an affordable price." />
        <meta name="keywords" content="innovi, innovi bangladesh, graphics design, logo design, business card design, business card print, quality business card print dhaka, banner print, advertisement, advertisement design, advertising dhaka, bangladesh graphics design, printing services dhaka, cheap printing services bangladesh, design firm bangladesh, advertising firm bangladesh" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Innovi">

            <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/base.css"/>
        <link rel="stylesheet" href="css/skeleton.css"/>
        <link rel="stylesheet" href="css/layout.css"/>
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/owl.carousel.css"/>
        <link rel="stylesheet" href="css/retina.css"/>

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="favicon.ico">
<!--        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon"> -->
<!--        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png"> -->

        <script type="text/javascript" src="js/modernizr.custom.js"></script>


    </head>
    <body>
        <div class="morph-button morph-button-overlay morph-button-fixed">
            <button type="button"></button>
            <div class="morph-content">
                <div>
                    <div class="content-style-overlay">
                        <span class="icon icon-close"></span>
                        <ul class="menu-in-overlay">
                            <li><div class="cl-effect-11"><a href="/" data-hover="HOME">HOME</a></div></li>
                            <li><div class="cl-effect-11"><a href="/about" data-hover="ABOUT">ABOUT</a></div></li>
                            <li><div class="cl-effect-11"><a href="/work" data-hover="WORK">WORK</a></div></li>
                            <li><div class="cl-effect-11"><a href="/services" data-hover="SERVICES">SERVICES</a></div></li>
                            <li><div class="cl-effect-11"><a href="/contact" data-hover="CONTACT">CONTACT</a></div></li>
                            <!-- <li><div class="cl-effect-11"><a href="/gallery" data-hover="GALLERY">GALLERY</a></div></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')


        <div id="footer">
        <a class="scroll" href="#work"><div class="back-top">&#xf102;</div></a>
        <div class="container">
            <div class="four columns" data-scrollreveal="enter left and move 250px over 1.5s">
                <a href="index.html"><div class="logo-footer"></div></a>
            </div>
            <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                <p><i class="icon-footer">&#xf041;</i><span>Innovi</span><br/>
                Rupayan Kamaruddin Tower(3rd floor)<br/>
                Plot B/A-20, Holding 8/A<br/>
                D.I.T Road Malibagh Chowdhury Para<br/>
                Dhaka-1219, Bangladesh<br/>
                +880 167 0555 774</p>
            </div>
            <div class="four columns" data-scrollreveal="enter right and move 250px over 1.5s">
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
                <div class="sixteen columns" data-scrollreveal="enter top and move 250px over 3s">
                    <P>© 2017 Innovi, all rights reserved. All other trademarks are copyright of their registered owners. Innovi is registered in Bangladesh, registered office: Rupayan Kamaruddin Tower, D.I.T Road Malibagh Chowdhury Para, Dhaka-1219, Bangladesh.</P>
                </div>
            </div>
        </div>

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
        <script type="text/javascript" src="js/template-about.js"></script>
        <script type="text/javascript" src="js/template-work.js"></script>
        <script type="text/javascript" src="js/template-contact.js"></script>
        <script type="text/javascript" src="js/template-services.js"></script>
    </body>
</html>