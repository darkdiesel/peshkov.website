<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    @include('partials.head_scripts')
    @include('partials.head_meta')
    @include('partials.head_title')
    @include('partials.head_fonts')
    @include('partials.head_styles')
</head>
<body class="d-flex flex-column h-100">

@yield('page')

@include('partials.footer_scripts')
</body>
</html>
