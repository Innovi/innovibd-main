@extends('layout.master')

@section('content')
    <div id="myContainer">

        <!-- Left Side
        ================================================== -->
        <div class="ms-left">
            <div class="ms-section" id="left1">
                <div class="just_pattern"></div>
                <ul class="flippy">
                    <li>
                        <div class="big-text">CREATIVITY</div>
                        <div class="text-line"></div>
                        <div class="small-text-down">Lab for Dreams</div>
                    </li>
                    <li>
                        <div class="big-text">INNOVATION</div>
                        <div class="text-line"></div>
                        <div class="small-text-down">Solution for idea seekers</div>
                    </li>
                    <li>
                        <div class="big-text">EXCELLENCE</div>
                        <div class="text-line"></div>
                        <div class="small-text-down">Factory for concept exercise</div>
                    </li>
                </ul>
            </div>

            <div class="ms-section" id="left2">
                <div class="black-back"></div>
                <div class="sections-link">
                    <div class="cl-effect-11">
                        <a href="about.html" data-hover="find out more">find out more</a>
                    </div>
                </div>
            </div>

            <div class="ms-section" id="left3">
                <div class="just_pattern"></div>
                <div class="big-text-down">our work</div>
                <div class="text-line-down"></div>
                <ul class="flippy">
                    <li>
                        <div class="small-text-down">We have a solid vision of lifting our clients to stand out.</div>
                    </li>
                    <li>
                        <div class="small-text-down">Our design is a blend of classic and modern elements.</div>
                    </li>
                </ul>
            </div>

            <div class="ms-section" id="left4">
                <div class="black-back"></div>
                <div class="sections-link"><div class="cl-effect-11"><a href="services.html" data-hover="Find out more">Find out more</a></div></div>
            </div>
            <div class="ms-section" id="left5">
                <div id="map"></div>
                <div class="map-shadow"></div>
            </div>
        </div>
        <!-- ================================================== -->

        <!-- Right Side
        ================================================== -->
        <div class="ms-right">
            <div class="ms-section" id="right1">
                <div class="black-back"></div>
                <div class="scrolling">scroll down</div>
            </div>

            <div class="ms-section" id="right2">
                <div class="just_pattern"></div>
                <div class="big-text-down">ABOUT US</div>
                <div class="text-line-down"></div>
                <ul class="flippy">
                    <li>
                        <div class="small-text-down">We strive hard for perfection to create a ground-breaking output.</div>
                    </li>
                    <li>
                        <div class="small-text-down">Let us provide you a higher level of uniqueness and quality.</div>
                    </li>
                </ul>
            </div>

            <div class="ms-section" id="right3">
                <div class="black-back"></div>
                <div class="sections-link">
                    <div class="cl-effect-11">
                        <a href="work.html" data-hover="discover">discover</a>
                    </div>
                </div>
            </div>

            <div class="ms-section" id="right4">
                <div class="just_pattern"></div>
                <div class="big-text-down">services</div>
                <div class="text-line-down"></div>
                <ul class="flippy">
                    <li>
                        <div class="small-text-down">GRAPHICS DESIGN</div>
                    </li>
                    <li>
                        <div class="small-text-down">BRANDING</div>
                    </li>
                    <li>
                        <div class="small-text-down">PRINTING SERVICES</div>
                    </li>
                    <li>
                        <div class="small-text-down">EVENTS SUPPORT</div>
                    </li>
                </ul>
            </div>

            <div class="ms-section" id="right5">
                <div class="black-back"></div>
                <div class="sections-link">
                    <div class="cl-effect-11">
                        <a href="contact.html" data-hover="get in touch">get in touch</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================== -->
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="js/template-intro.js"></script>
    <script type="text/javascript" src="js/jquery.multiscroll.js"></script>
@endpush
