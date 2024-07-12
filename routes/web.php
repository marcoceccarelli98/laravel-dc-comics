<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $menu = [
        [
            'title' => 'Characters',
            'link' => '' //route('characters')
        ],
        [
            'title' => 'Comics',
            'link' => route('comics')
        ],
        [
            'title' => 'Movies',
            'link' => '' //route('movies')
        ],
        [
            'title' => 'Tv',
            'link' => '' //route('tv')
        ],
        [
            'title' => 'Games',
            'link' => '' //route('games')
        ],
        [
            'title' => 'Collectibles',
            'link' => '' //route('collectibles')
        ],
        [
            'title' => 'Videos',
            'link' => '' //route('videos')
        ],
        [
            'title' => 'Fans',
            'link' => '' //route('fans')
        ],
        [
            'title' => 'News',
            'link' => '' //route('news')
        ],
        [
            'title' => 'Shop',
            'link' => '' //route('shop')
        ],
    ];

    $data = [
        'comics' => config('comics'),
        'menu' => $menu
    ];

    return view('comics', compact('data'));
})->name('comics');
