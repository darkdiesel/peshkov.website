@extends('layouts.main')

@section('title', ' | Tetris Browser Game')

@section('content')

    <div class="container my-5">
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
                <h3>Snake</h3>
                <p>TODO!</p>
            </div>
        </div>
    </div>
@endsection
