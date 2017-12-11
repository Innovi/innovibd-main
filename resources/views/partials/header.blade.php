    <!-- Meta -->
    <meta name="description" content="Innovi is an advertising agency, providing outstanding graphics design, printing and advertising services at an affordable price." />
    <meta name="keywords" content="innovi, innovi bangladesh, graphics design, logo design, business card design, business card print, quality business card print dhaka, banner print, advertisement, advertisement design, advertising dhaka, bangladesh graphics design, printing services dhaka, cheap printing services bangladesh, design firm bangladesh, advertising firm bangladesh" />

    <!-- Facebook and Twitter integration
    ================================================== -->
    <meta property="og:type" name="og:type" content="website"/>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:url" name="og:url" content="{{ request()->url() }}"/>
    <meta property="og:caption" name="og:caption" content="{{ config('app.url') }}"/>
    <meta property="fb:app_id" name="fb:app_id" content="{{ config('app.facebook_id') }}"/>
    <meta property="og:title" name="og:title" content="{{ isset($title) ? $title : config('app.title') }}">
    <meta property="og:description" name="og:description" content="{{ isset($description) ? $description : config('app.description') }}">
    <meta property="og:image" name="og:image" content="{{ config('app.url') }}{{ isset($image) ? $image : '/images/logo.png' }}">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <!-- Stylesheet
    ================================================== -->
    @if ( (isset($page) ? $page : ' ') == 'home')
        <link rel="stylesheet" href="{{ URL::asset('css/jquery.multiscroll.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style-intro.css') }}">
    @endif
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">

    @if ( (isset($page) ? $page : ' ') !== 'home')
        <!-- Skeleton  -->
        <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/skeleton.css') }}">

        <!-- Theme style  -->
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/retina.css') }}">
    @endif

    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
    <!-- ================================================== -->

    <!-- Scripts
    ================================================== -->
    <script>
      window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
      ]); ?>
    </script>

    <!-- Modernizr JS -->
    <script src="{{ URL::asset('js/modernizr.custom.js') }}"></script>
    <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
            <script src="{{ URL::asset('js/respond.min.js') }}"></script>
        <![endif]-->
    <!-- ================================================== -->
