<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;



class MovieController extends Controller
{
    //use \ResponseTrait;
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moves=Movie::all();
        return response()->json($moves,200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'title' =>'required|string|max:255|unique' ,
            'director'=>'required|string|max:255',
            'genre'=>'required|string|max:255',
            'release_year'=>'required|int',
            'description'=>'required|string',
        ]);
        $move=Movie::create($validateData);
        return response()->json($move,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return response()->json($movie,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validateData=$request->validate([
            'title' =>'required|string|max:255|unique' ,
            'director'=>'required|string|max:255',
            'genre'=>'required|string|max:255',
            'release_year'=>'required|int',
            'description'=>'required|string',
        ]);
        $move=Movie::update($validateData);
        return response()->json($move,201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return response()->json(null,204);
    }
}
