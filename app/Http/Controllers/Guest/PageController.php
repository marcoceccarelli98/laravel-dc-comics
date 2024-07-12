<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $menu = [
            [
                'title' => 'Characters',
                'link' => '' //route('characters')
            ],
            [
                'title' => 'Comics',
                'link' => '' //route('comics')
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
            'comics' => Comic::all(),
            'menu' => $menu
        ];

        return view('home', compact('data'));
    }
}
