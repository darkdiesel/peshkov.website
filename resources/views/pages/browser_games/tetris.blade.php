@extends('layouts.main')

@section('title', ' | Tetris Browser Game')

@section('content')
    <div class="container mb-3">
        <h1>Tetris</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb px-3 py-1 bg-body-tertiary rounded-1 border">
                <li class="breadcrumb-item">
                    <a class="link-body-emphasis" href="{{ route('home') }}">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="{{ route('browser_games.index') }}">Browser Games</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Tetris
                </li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="badge text-bg-danger mb-3">Coming soon</span>
            </div>
        </div>
    </div>
@endsection


@push('footer_scripts')
    <script type="application/javascript" src="{{ mix('js/snake-game.min.js') }}"></script>
@endpush
