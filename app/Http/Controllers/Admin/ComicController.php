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
        $data = [
            //'comics' => config('comics'),
            'comics' => Comic::all(),
        ];

        return view('comics.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:100',
        //     'description' => 'required|string',
        //     'thumb' => 'required|string',
        //     'price' => 'required|numeric',
        //     'series' => 'required|string|max:50',
        //     'sale_date' => 'required|date',
        //     'type' => 'required|string|max:50',
        //     'artists' => 'required|array',
        //     'writers' => 'required|array',
        // ]);

        Comic::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
            'artists' => $request->artists,
            'writers' => $request->writers,
        ]);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
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
