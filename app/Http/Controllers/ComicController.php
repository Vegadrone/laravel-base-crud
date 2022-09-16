<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $types = DB::table('comics')->select('type as type_name')->distinct()->get();

        return view('comics.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateComicEntry = $request->validate(
            [
                'title' => 'required|min:3|max:255',
                'thumbnail' => 'required|url',
                'series' => 'required|min:3|max:255',
                'date' => 'required|date|after:1837/01/01',
                'price' => 'required|min:1|max:4',
                // 'type' => 'required|min:3|max:255',
                'description' => 'required|min:3|max:255',
            ]

        );


        $comicEntry = $request->all();

        $comic = new Comic();
        $comic->fill($comicEntry);
        $comic->save();

        return redirect()->route('comics.show', compact('comic'))->with('created', $comicEntry['title']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic= Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        $types = DB::table('comics')->select('type as type_name')->distinct()->get();

        return view('comics.edit', compact(['comic', 'types']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modifiedData = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($modifiedData);


        return redirect()->route('comics.show', $comic->id)->with('edited', $comic->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        //in alternativa

        // Comic::destroy($id);

        return redirect()->route('comic.index')->with('delete', $comic->title);
    }
}
