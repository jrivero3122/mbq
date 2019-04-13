<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    {{-- Boostrap Style --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/cover.css') }}" rel="stylesheet"> --}}

    <!-- Default stylesheets-->
    <link href="{{  asset('assets/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{  asset('assets/lib/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{  asset('assets/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{  asset('assets/css/style.css') }}" rel="stylesheet">
    <link id="color-scheme" href="{{  asset('assets/css/colors/default.css') }}" rel="stylesheet">


</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
    @include('inc.header')
    @yield('content')  


{{-- Boostrap JS     --}}
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

<!--  
    JavaScripts
    =============================================
    -->
    <script src="{{  asset('assets/lib/jquery/dist/jquery.js') }}"></script>
    <script src="{{  asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{  asset('assets/lib/wow/dist/wow.js')}}"></script>
    <script src="{{  asset('assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{  asset('assets/lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{  asset('assets/lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{  asset('assets/lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{  asset('assets/lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{  asset('assets/lib/smoothscroll.js')}}"></script>
    <script src="{{  asset('assets/lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{  asset('assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{  asset('assets/js/plugins.js')}}"></script>
    <script src="{{  asset('assets/js/main.js')}}"></script>

</body>
</html>
