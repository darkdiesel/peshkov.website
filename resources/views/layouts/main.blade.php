@extends('layouts.base')

@section('page')
    @include('partials.header')

    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.footer')
@endsection
