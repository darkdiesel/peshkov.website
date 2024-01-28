@extends('layouts.main')

@section('title', ' | Snake Browser Game')

@push('meta')
    <meta name="description" content="Eat the food but don't hit the walls or your own tail! Classic snake game js adaptation.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('browser_games.snake') }}" />
    <meta property="og:title" content="Snake Browser Game" />
    <meta property="og:description" content="Eat the food but don't hit the walls or your own tail! Classic snake game js adaptation." />
    <meta property="og:image" content="{{URL::asset('/img/browser-games/snake.png')}}" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="peshkov.website">
    <meta property="twitter:url" content="{{ route('browser_games.snake') }}">
    <meta name="twitter:title" content="Snake Browser Game">
    <meta name="twitter:description" content="Eat the food but don't hit the walls or your own tail! Classic snake game js adaptation.">
    <meta name="twitter:image" content="{{URL::asset('/img/browser-games/snake.png')}}">
@endpush

@section('content')
    <div class="container mb-3">
        <h1>Snake</h1>
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
                    Snake
                </li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <img src="{{URL::asset('/img/browser-games/snake.png')}}" class="img-thumbnail" alt="Snake Game">
                                <div class="py-2">
                                    <a class="text-info" href="https://github.com/darkdiesel/ipa-snake-game-js" target="_blank"><i class="fa-brands fa-square-github fa-2x"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12 ">
                                <div class="mb-3">
                                    <h5 class="">Snake</h5>
                                    <p class="">Eat the food but don't hit the walls or your own tail! Classic snake game js adaptation.</p>
                                </div>
                                <div class="accordion accordion-flush border mb-3" id="snakeGameInfo">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSnakeControls" aria-expanded="false" aria-controls="flush-collapseSnakeControls">
                                                <i class="fa-solid fa-gamepad me-2"></i> Game Controls
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSnakeControls" class="accordion-collapse collapse" data-bs-parent="#snakeGameInfo">
                                            <div class="accordion-body">
                                                <p>To control the snake, you have several options to choose from.</p>
                                                <p>If you are play on PC use standard WASD, Arrows or Numpad Arrows.</p>
                                                <p>To control the snake on the mobile device, use the buttons under the playing field ot swipe.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSnakeSettings" aria-expanded="true" aria-controls="flush-collapseSnakeSettings">
                                                <i class="fa-solid fa-gear me-2"></i> Game Settings
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSnakeSettings" class="accordion-collapse collapse show" data-bs-parent="#snakeGameInfo">
                                            <div class="accordion-body">
                                                <div class="row mb-3">
                                                    <div class="col-4">
                                                        <label for="snakeSpeed" class="col-form-label"><i class="fa-solid fa-gauge-high me-1"></i> Speed</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="range" class="form-range my-2" in="1" max="10" step="1" value="3" name="snakeSpeed" id="snakeSpeed">
                                                    </div>
                                                </div>
                                                <div class="row mb-3 py-1">
                                                    <div class="col-5 col-sm-4">
                                                        <label class="form-check-label float-start me-2" for="snakeWalls"><i class="fa-solid fa-person-walking-dashed-line-arrow-right me-1"></i> Walls</label>
                                                    </div>
                                                    <div class="col-7 col-sm-8">
                                                        <div class="form-check form-switch p-0">
                                                            <input class="form-check-input float-none mx-0" type="checkbox" role="switch" checked="checked" id="snakeWalls">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3 py-1">
                                                    <div class="col-5 col-sm-4">
                                                        <label class="form-check-label float-start me-2" for="snakeSounds"><i class="fa-solid fa-music me-1"></i> Sounds</label>
                                                    </div>
                                                    <div class="col-7 col-sm-8">
                                                        <div class="form-check form-switch p-0">
                                                            <input class="form-check-input float-none mx-0" type="checkbox" role="switch" id="snakeSounds">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-4">
                                                        <label for="snakeVolume" class="col-form-label"><i class="fa-solid fa-volume-low me-1"></i> Volume</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="range" class="form-range my-2" min="1" max="100" step="1" value="10" name="snakeVolume" id="snakeVolume">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSnakeInfo" aria-expanded="false" aria-controls="flush-collapseSnakeInfo">
                                                <i class="fa-solid fa-circle-info me-2"></i> More Info
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSnakeInfo" class="accordion-collapse collapse" data-bs-parent="#snakeGameInfo">
                                            <div class="accordion-body">
                                                <p>
                                                    Follow my <a class="text-info" href="https://github.com/darkdiesel/ipa-snake-game-js" target="_blank">github repository</a>
                                                    to check updates, manual how to use this game in your project
                                                    or just find (in future) more classic games with brick game style.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-success" data-ipa-snake-game="start" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-play me-1"></i> Play</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <dov class="col-12">
                                <div id="ipa-snake-game" class="ipa-snake-game" data-ipa-snake-game="init" data-ipa-snake-game-s-speed="#snakeSpeed" data-ipa-snake-game-s-walls="#snakeWalls" data-ipa-snake-game-s-sounds="#snakeSounds" data-ipa-snake-game-s-volume="#snakeVolume">
                                    <div class="row my-1">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-sm btn-outline-secondary mx-2" data-ipa-snake-game="start" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-play"></i> <span class="visually-hidden">Play</span></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary mx-2" data-ipa-snake-game="pause" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-pause"></i> <span class="visually-hidden">Pause</span></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary mx-2" data-ipa-snake-game="stop" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-stop"></i> <span class="visually-hidden">Stop</span></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary mx-2" data-ipa-snake-game="reset" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-arrows-rotate"></i> <span class="visually-hidden">Reset</span></button>
                                            <span class="ipa-snake-game-score">
                                                Points: <span class="ipa-snake-game-score-count badge text-bg-secondary mb-2">0</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ipa-snake-game-canvas-wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="ipa-snake-game-controls">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 my-0">
                                                        <button type="button" class="btn btn-sm btn-outline-info" data-ipa-snake-game="up" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-chevron-up"></i> <span class="visually-hidden">Up</span></button>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-sm btn-outline-info mx-3" data-ipa-snake-game="left" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-chevron-left"></i> <span class="visually-hidden">Left</span></button>
                                                        <button type="button" class="btn btn-sm btn-outline-info mx-3" data-ipa-snake-game="right" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-chevron-right"></i> <span class="visually-hidden">Right</span></button>
                                                    </div>
                                                    <div class="col-12 my-0">
                                                        <button type="button" class="btn btn-sm btn-outline-info" data-ipa-snake-game="down" data-ipa-snake-game-parent="#ipa-snake-game"><i class="fa-solid fa-chevron-down"></i> <span class="visually-hidden">Down</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </dov>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ mix('css/ipa-snake-game.css') }}" rel="stylesheet">
@endpush

@push('footer_scripts')
    <script src="{{ mix('js/ipa-snake-game.min.js') }}"></script>
@endpush
