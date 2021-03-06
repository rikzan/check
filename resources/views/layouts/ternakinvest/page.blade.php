<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Koperasi Sarikat Investama Madani</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        @yield('style')
        @stack('after_styles')
        @toastr_css
    </head>
    <!-- Body -->
    <body>
        @include('layouts.ternakinvest.navbar-page')
        
        <!-- Content -->
        @yield('content')

        @include('layouts.footer')
        
        <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        @yield('script')
        @stack('after_scripts')
        @toastr_js
        @toastr_render
    </body>
</html>
