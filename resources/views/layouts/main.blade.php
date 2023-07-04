@extends('layouts.base')

@section('page')
    <header>
        @include('partials.header')
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="">
        @include('partials.footer')
    </footer>
@endsection
