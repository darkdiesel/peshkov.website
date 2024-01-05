<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    @include('partials.head_scripts')
    @include('partials.head_meta')
    @include('partials.head_title')
    @include('partials.head_fonts')
    @include('partials.head_styles')
</head>
<body>
<canvas id="background"></canvas>

<div class="wrapper">
    @yield('page')
</div>

@include('partials.footer_scripts')
</body>
</html>
