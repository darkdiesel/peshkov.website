<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrowserGamesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', [IndexController::class, 'index'] )->name( 'home' );

//Route::get('/', function () {
//    return view('pages.index.index');
//})->name( 'home' );

Route::get( '/about/resume', [AboutController::class, 'index'])->name('about.index');


Route::get( '/browser-games/list', [BrowserGamesController::class, 'index'])->name('browser_games.index');
Route::get( '/browser-games/snake', [BrowserGamesController::class, 'snake'])->name('browser_games.snake');
Route::get( '/browser-games/tetris', [BrowserGamesController::class, 'tetris'])->name('browser_games.tetris');
