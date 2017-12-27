@extends('layout.master')

@section('content')
    <div id="services">
        <div class="parallax-section">
            <div class="parallax-services"></div>
            <div class="just_pattern"></div>
            <div class="container z-index-pages">
                <div class="sixteen columns" data-scrollreveal="enter top and move 250px over 3s">
                    <h1>Services</h1>
                </div>
                <div class="sixteen columns">
                    <div class="text-line-pages"></div>
                </div>
                <div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 3s">
                    <ul class="flippy">
                        <li>
                            <div class="small-text-pages">Graphics Design</div>
                        </li>
                        <li>
                            <div class="small-text-pages">Branding</div>
                        </li>
                        <li>
                            <div class="small-text-pages">Printing Services</div>
                        </li>
                        <li>
                            <div class="small-text-pages">IT Support</div>
                        </li>
                        <li>
                            <div class="small-text-pages">Events Support</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ================================================== -->

        <div class="top-section">
            <div class="container">
                <div class="sixteen columns" data-scrollreveal="enter top and move 250px over 3s">
                    <p>We emphasize on creating quality products with CUTTING EDGE technology, which would guide you to reach the best output possible.</p>
                </div>
                <div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 3s">
                    <div class="sections-link-pages">
                        <div class="cl-effect-11">
                            <a class="scroll" href="#pric-scroll" data-hover="Our Services">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================== -->

        <div class="plans" id="pric-scroll">
            <div class="container">
                <div class="sixteen columns" data-scrollreveal="enter top and move 250px over 1.5s">
                    <h4>Our Services</h4>
                    <div class="uper-text">
                        <p>Innovi provides you its best services in the following category and subcategory.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <div class="plan-single">
                            <div class="plan-icon">&#xf108;</div>
                            <h5><span>Graphics Design</span></h5>
                            <p><strong>Branding Design:</strong> Logo design, Business Stationary Item design </p>
                            <p><strong>Corporate Souvenir:</strong> Magazines, Annual books, Gift Boxes, Greetings &amp; Invitation Cards </p>
                            <p><strong>Environmental Graphics:</strong> Signage </p>
                            <p><strong>Above the line:</strong> Posters, Banners, Newspaper Ads</p>
                            <p><strong>Motions Graphics:</strong> Product 3D Animation, Project Animation, Data Visualization</p>
                            <div class="sections-link-pages plan-single-btn">
                                <div class="cl-effect-11">
                                    <a href="{{URL::to('/contact')}}" data-hover="Create Yours">Create Yours</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <div class="plan-single">
                            <div class="plan-icon">&#xf16c;</div>
                            <h5><span>Printing</span></h5>
                            <P><strong>Commercial Printing:</strong> Stationary, Posters</P>
                            <p><strong>Contract Publishing: </strong>Magazine, Newsletter Etc</p>
                            <p><strong>Print Solution For Indoors: </strong>Acrylic Sign, Pos Display</p>
                            <p><strong>Print Solution For Outdoors: </strong>PVC, Panaflex, NEON</p>
                            <p><strong>Mobile Printing:</strong>Billboard, Vehicle Wrap</p>
                            <p><strong>Offset Printing: </strong> Book, Calender, Diary Etc.</p>
                            <div class="sections-link-pages plan-single-btn">
                                <div class="cl-effect-11">
                                    <a href="{{URL::to('/contact')}}" data-hover="Order Now">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <div class="plan-single">
                            <div class="plan-icon">&#xf108;</div>
                            <h5><span>IT Support</span></h5>
                            <P><strong>WEB App Design</strong></P>
                            <p><strong>Mobile App Design </strong></p>
                            <P><strong>WEB App Development</strong></P>
                            <p><strong>Mobile App Development</strong></p>
                            <p><strong>ERP System Development</strong></p>
                            <div class="sections-link-pages plan-single-btn">
                                <div class="cl-effect-11">
                                    <a href="{{URL::to('/contact')}}" data-hover="Contact Us">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <div class="plan-single">
                            <div class="plan-icon">&#xf0f0;</div>
                            <h5><span>Events</span></h5>
                            <P><strong>Corporate Events:</strong> Annual General Meeting, Meeting &amp; Conference, Press Gathering, Product Promotion, Product Launching, Fashion Shows, Product Display, Client Participating Activation</P>
                            <p><strong>Social &amp; Cultural Events:</strong>Concerts, Inauguration Ceremony, Ballroom Events</p>
                            <div class="sections-link-pages plan-single-btn"><div class="cl-effect-11"><a href="{{URL::to('/contact')}}" data-hover="Contact Us">Contact Us</a></div></div>
                        </div>
                    </div>
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <div class="plan-single">
                            <div class="plan-icon">&#xf16c;</div>
                            <h5><span>Digital Marketing</span></h5>
                            <P><strong>Social Media:</strong> Facebook, Instagram, Twitter, LinkedIn, Snapchat, Youtube</P>
                            <p><strong>Website Promotion:</strong>SEO, SEM (AdWords, Bing Ads)</p>
                            <p><strong>Direct Marketing:</strong>Email Marketing, SMS Marketing, Promotional Letters</p>
                            <div class="sections-link-pages plan-single-btn"><div class="cl-effect-11"><a href="{{URL::to('/contact')}}" data-hover="Order Now">Order Now</a></div></div>
                        </div>
                    </div>
                    <div class="one-third column" data-scrollreveal="enter bottom and move 250px over 1.5s">
                        <div class="plan-single">
                            <div class="plan-icon">&#xf16c;</div>
                            <h5><span>Content Making</span></h5>
                            <P><strong>Traditional: </strong>TVC, RDC</P>
                            <P><strong>Facebook/Instagram: </strong>Event Campaign, General Posters, Story Writing, Short AV</P>
                            <P><strong>Youtube: </strong>Video Advertisement, Product/Service </P>
                            <div class="sections-link-pages plan-single-btn"><div class="cl-effect-11"><a href="{{URL::to('/contact')}}" data-hover="Order Now">Order Now</a></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================== -->

        <div class="services-top">
            <div class="container">
                <div class="sixteen columns" data-scrollreveal="enter top and move 250px over 1.5s">
                    <h4>From Simple Ideas To An Exceptional Output</h4>
                    <div class="uper-text">
                        <p>Not only we are capable to provide you the best output, but also we doing to providing the best to the planet earth and it's people.</p>
                    </div>
                </div>
                <div class="sixteen columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div id="sync5" class="owl-carousel">
                        <div class="item">
                            <div class="services-big-top-box">
                                <img src="images/ser1.png" alt="">
                                <h6>Out of the Box Designs</h6>
                                <p>Innovi will provide you outstanding designs and out of the box ideas, which fits your company or your personal needs. </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-big-top-box">
                                <img src="images/ser2.png" alt="">
                                <h6>Affordable and Excellent Printing</h6>
                                <p>Innovi can help you save thousands for your business, and also keep the standard of quality as high as it is possible.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-big-top-box">
                                <img src="images/ser3.png" alt="">
                                <h6>Fully Flexible and Personalised</h6>
                                <p>Innovi lets you set your own track- we would not blok your path of creativity. Explain us your needs and we will design your dreams.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-big-top-box">
                                <img src="images/ser4.png" alt="">
                                <h6>Front End Development</h6>
                                <p>Cutting Edge technology and highest quality machines are used to provide you designs and printing services. </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-big-top-box">
                                <img src="images/ser6.png" alt="">
                                <h6>We are Eco-Friendly</h6>
                                <p>Among many options, Innovi can provide you with eco-friendly FSC certified recyclable paper made of recycled item, with a broad view to save the environment.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-big-top-box">
                                <img src="images/ser5.png" alt="">
                                <h6>One Stop Service</h6>
                                <p>From planning marketing strategy to designing it, and then executing it, all can be found under one roof</p>
                            </div>
                        </div>
                    </div>
                    <div id="sync6" class="owl-carousel">
                        <div class="item">
                            <div class="services-top-box">
                                <div class="arrow-up"></div>
                                <img src="images/ser1.png" alt="">
                                <h6>Out of the Box</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-top-box">
                                <div class="arrow-up"></div>
                                <img src="images/ser2.png" alt="">
                                <h6>Affordability</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-top-box">
                                <div class="arrow-up"></div>
                                <img src="images/ser3.png" alt="">
                                <h6>Personalised</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-top-box">
                                <div class="arrow-up"></div>
                                <img src="images/ser4.png" alt="">
                                <h6>Development</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-top-box">
                                <div class="arrow-up"></div>
                                <img src="images/ser6.png" alt="">
                                <h6>Eco-Friendly</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="services-top-box">
                                <div class="arrow-up"></div>
                                <img src="images/ser5.png" alt="">
                                <h6>One Stop Service</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================== -->

        <div class="clients">
            <div class="container">
                <div class="sixteen columns" data-scrollreveal="enter top and move 250px over 1.5s">
                    <h4>Our Clients</h4>
                    <div class="uper-text">
                        <p>Some of the clients who were has built long lasting partnerships with us.</p>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap">
                        <img src="images/logos/clientsLogo01.png" alt="">
                        <div class="mask"><p>Hassan Book Depot</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap">
                        <img src="images/logos/clientsLogo02.png" alt="">
                        <div class="mask"><p>South Point</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap">
                        <img src="images/logos/clientsLogo03.png" alt="">
                        <div class="mask"><p>SS Solutions</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap">
                        <img src="images/logos/clientsLogo04.png" alt="">
                        <div class="mask"><p>Sierrra Form</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap">
                        <img src="images/logos/clientsLogo11.png" alt="">
                        <div class="mask"><p>International Club</p></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap2">
                        <img src="images/logos/clientsLogo06.png" alt="">
                        <div class="mask"><p>Personalised Card</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap2">
                        <img src="images/logos/clientsLogo07.png" alt="">
                        <div class="mask"><p>RFID Solution</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap2">
                        <img src="images/logos/clientsLogo08.png" alt="">
                        <div class="mask"><p>Branding</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap2">
                        <img src="images/logos/clientsLogo09.png" alt="">
                        <div class="mask"><p>Branding</p></div>
                    </div>
                </div>
                <div class="three columns" data-scrollreveal="enter bottom and move 250px over 1.5s">
                    <div class="clients-wrap2">
                        <img src="images/logos/clientsLogo10.png" alt="">
                        <div class="mask"><p>RFID Solution</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================================== -->
@endsection

@push('scripts')
    <script type="text/javascript" src="js/template-services.js"></script>
@endpush
