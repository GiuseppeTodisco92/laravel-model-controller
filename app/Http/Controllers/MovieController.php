<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home',compact('movies'));
    }

    public function show($id)
    {
        // SELECT * FROM books WHERE id = $id
        // $book = Book::where('id', $id)->first();
        $movie = Movie::find($id);
        
        return view('show', compact('movie'));
    }

}
