<?php

namespace App\Http\Controllers;

use \App\Movie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::simplePaginate(5);
        return view('movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'release_date' => 'required',
            'viewers' => 'required'
        ]);
        Movie::create($request->all());
        session()->flash('success', 'The Post Was Created');
        return redirect('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        // $movie = Movie::findOrFail($id);
        return view('movie/detail', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        // $movie = Movie::findOrFail($id);
        return view('movie.edit', compact('movie'));
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
        $this->validate($request, [
            'title' => 'required',
            'release_date' => 'required',
            'viewers' => 'required'
        ]);
        Movie::whereId($id)->update($request->except(['_method', '_token']));
        return redirect('movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        session()->flash('success', 'The Post Was Deleted');
        return redirect('movie');
    }
}
