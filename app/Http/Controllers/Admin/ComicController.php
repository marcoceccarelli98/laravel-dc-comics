<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        //$comics = Comic::all();

        $data = [
            //'comics' => config('comics'),
            'comics' => Comic::all(),
            'menu' => $menu
        ];

        return view('comics.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
