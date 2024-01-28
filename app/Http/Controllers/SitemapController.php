<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        return response()->view('pages.sitemap.index')->header('Content-Type', 'text/xml');
    }
}
