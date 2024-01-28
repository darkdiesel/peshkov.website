@extends('layouts.main')

@section('title', ' | Browser Games')

@section('content')

    <div class="container mb-3">
        <h1>Browser Games</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb px-3 py-1 bg-body-tertiary rounded-1 border">
                <li class="breadcrumb-item">
                    <a class="link-body-emphasis" href="{{ route('home') }}">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Browser Games
                </li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('browser_games.snake') }}">
                                        <img src="{{URL::asset('/img/browser-games/snake.png')}}" class="img-fluid rounded-start" alt="Snake Game">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Snake</h5>
                                        <p class="card-text">Eat the food but don't hit the walls or your own tail!</p>
                                        <a href="{{ route('browser_games.snake') }}" class="btn btn-primary">Play</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('browser_games.tetris') }}">
                                        <img src="{{URL::asset('/img/browser-games/tetris.png')}}" class="img-fluid rounded-start" alt="Tetris Game">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Tetris <span class="badge text-bg-danger mb-3">Coming soon</span></h5>
                                        <p class="card-text">A puzzle video game created in 1985 by Alexey Pajitnov, a Soviet software engineer. This is my browser adaptation.</p>
                                        <a href="{{ route('browser_games.tetris') }}" class="btn btn-primary">Play</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
