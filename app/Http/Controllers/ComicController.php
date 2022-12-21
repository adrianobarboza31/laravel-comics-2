<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $formdata = $request->all();
        $newComic = new Comic();
        $newComic->title = $formdata['title'];
        $newComic->description = $formdata['description'];
        $newComic->thumb = $formdata['thumb'];
        $newComic->price = $formdata['price'];
        $newComic->series = $formdata['series'];
        $newComic->sale_date = $formdata['sale_date'];
        $newComic->type = $formdata['type'];
        $newComic->save();
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        return view('comics.show',compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comics = Comic::findorFall($id);
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id){

        $comics = Comic::find($id);
        $formdata = $request->all();
        $comics->title = $formdata['title'];
        $comics->description = $formdata['description'];
        $comics->thumb = $formdata['thumb'];
        $comics->price = $formdata['price'];
        $comics->series = $formdata['series'];
        $comics->sale_date = $formdata['sale_date'];
        $comics->type = $formdata['type'];
        $comics->update();
        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
