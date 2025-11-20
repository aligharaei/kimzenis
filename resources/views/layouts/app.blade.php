{{-- resources/views/layouts/app.blade.php --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>@yield('title', 'Kimzenis – Architecture & Interior Design')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="description" content="@yield('meta_description', 'Kimzenis – Architecture & Interior Design Portfolio')"/>

    {{-- Google Fonts from template --}}
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:100,400,400i,700,700i%7CPlayfair+Display:400,400i,700,700i%7CMaterial+Icons&display=swap"/>

    {{-- Template CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>

    {{-- Favicons (copy img/content from template into /public/img/content) --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/content/apple-icon-57x57.png') }}"/>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/content/apple-icon-60x60.png') }}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/content/apple-icon-72x72.png') }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/content/apple-icon-76x76.png') }}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/content/apple-icon-114x114.png') }}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/content/apple-icon-120x120.png') }}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/content/apple-icon-144x144.png') }}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/content/apple-icon-152x152.png') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/content/apple-icon-180x180.png') }}"/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/content/android-icon-192x192.png') }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/content/favicon-32x32.png') }}"/>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/content/favicon-96x96.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/content/favicon-16x16.png') }}"/>
    <link rel="manifest" href="{{ asset('img/content/manifest.json') }}"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="{{ asset('img/content/ms-icon-144x144.png') }}"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/content/favicon.ico') }}"/>

    @stack('head')
</head>
<body>
<div data-barba="wrapper">
    {{-- PAGE PRELOADER (same as template) --}}
    <div class="preloader js-preloader">
        <div class="preloader__curtain preloader__curtain_outer bg-dark"></div>
        <div class="preloader__content">
            <div class="preloader__curtain preloader__curtain_inner bg-accent-primary-1"></div>
            <div class="preloader__wrapper-logo">
                <a class="logo" href="{{ route('home') }}">
                    <div class="logo__text">
                        <span class="logo__text-title">Kimzenis</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- - PAGE PRELOADER --}}

    {{-- HEADER --}}
    @include('partials.header')

    {{-- PAGE CONTENT WRAPPER (Barba container) --}}
    <div class="page-wrapper @yield('page_wrapper_classes')" data-barba="container">
        <main class="page-wrapper__content">
            @yield('content')
        </main>
    </div>

    {{-- Global transition & canvas (from template bottom) --}}
    <div class="transition-curtain bg-dark-2"></div>
    <canvas class="js-webgl" id="js-webgl"></canvas>
</div>

{{-- Template JS --}}
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/components.js') }}"></script>

{{-- Optional: Google Maps or other page-specific scripts can be pushed from pages --}}
@stack('scripts')
</body>
</html>
