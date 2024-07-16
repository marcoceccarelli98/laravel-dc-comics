<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
    public function store(StoreComicRequest $request)
    {

        $data = $request->validated();
        $data['artists'] = array_map('trim', explode(',', $data['artists']));
        $data['writers'] = array_map('trim', explode(',', $data['writers']));
        Comic::create($data);

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
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Comic $comic)
    // {
    //     // $data = $request->all();
    //     // $comic->update($data);
    //     // return redirect()->route('comics.show', $comic->id);
    // }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        $data['artists'] = array_map('trim', explode(',', $data['artists']));
        $data['writers'] = array_map('trim', explode(',', $data['writers']));

        $comic->update($data);

        return redirect()->route('comics.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
