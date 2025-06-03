<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'movie_id' => 'required|exists:movies,id',
            'rate' => 'required|int',
            'review' => 'required|string',
        ]);
        $move = Book::create($validateData);
        return response()->json($move, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $Book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $Book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $Book)
    {
        //
    }
}
