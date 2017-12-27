<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Innovi') }}</title>

    @include('partials.header')
</head>

<body class="royal_loader">
    <!-- Partial Navigation
    ================================================== -->
    @include('partials.navigation')

    <!-- Content
    ================================================== -->
    @yield('content')

    <!-- Partial Footer
    ================================================== -->
    @include('partials.footer')
</body>
</html>
