@extends('layouts.base')

<canvas id="background"></canvas>

@section('page')
    @include('partials.header')

    <main class="mt-6 mb-4 flex-shrink-0">
        @yield('content')
    </main>

    @include('partials.footer')
@endsection
