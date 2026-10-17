<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $genre = $request->query('genre', 'all');
        $year = $request->query('year', 'all');

        $movies = Movie::all();

        if ($genre !== 'all') {
            $movies = $movies->where('genre', $genre);
        }
        if ($year !== 'all') {
            $movies = $movies->where('year', $year);
        }

        return view('movies.index', compact('movies', 'genre', 'year'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'genre' => 'required|in:Action,Comedy,Drama',
            'rating' => 'required|numeric|min:0|max:10',
            'year' => 'required|integer|min:1900|max:2100',
        ]);

        Movie::create($validated);

        return redirect()->route('movies.index')->with('success', 'Movie added successfully.');
    }

    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

    public function featured()
    {
        $movie = Movie::findOrFail(3);
        return view('movies.show', compact('movie'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
