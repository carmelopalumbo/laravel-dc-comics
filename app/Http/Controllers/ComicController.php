<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
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
        $comics = Comic::orderBy('id', 'desc')->paginate(7);
        return view('comics.index', compact('comics'));
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
    public function store(ComicRequest $request)
    {
        // all() method get only data array
        $form_input = $request->all();
        $form_input['slug'] = Comic::generateSlug($form_input['title']);

        //dd($form_input);
        $new_item = new Comic();
        $new_item->slug = $form_input['slug'];

        $new_item->fill($form_input);

        $new_item->save();

        return redirect(route('comics.show', $new_item));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_input = $request->all();

        if ($form_input['title'] != $comic->title) {
            $form_input['slug'] = Comic::generateSlug($form_input['title']);
        } else {
            $form_input['slug'] = $comic->slug;
        }

        // fill with new data
        $comic->update($form_input);

        return redirect(route('comics.show', $comic))->with('edit', "Comics: <strong>$comic->title</strong> aggiornato con successo.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect(route('comics.index'))->with('delete', "Comics: <strong>$comic->title</strong> eliminato.");
    }
}
