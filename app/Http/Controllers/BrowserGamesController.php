<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowserGamesController extends Controller
{
    public function index()
    {
        return view('pages.browser_games.index');
    }
    public function snake()
    {
        return view('pages.browser_games.snake');
    }
    public function tetris()
    {
        return view('pages.browser_games.tetris');
    }
}
