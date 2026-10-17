<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create(['title' => 'Spiderman', 'genre' => 'Action', 'rating' => 9.1, 'year' => 2002, 'is_available' => true]);
        Movie::create(['title' => 'Gagamboy', 'genre' => 'Comedy', 'rating' => 8.5, 'year' => 2010, 'is_available' => true]);
        Movie::create(['title' => 'Harry Potter', 'genre' => 'Drama', 'rating' => 9.7, 'year' => 2001, 'is_available' => false]);
        Movie::create(['title' => 'Grown Ups', 'genre' => 'Comedy', 'rating' => 8.6, 'year' => 2010, 'is_available' => true]);
        Movie::create(['title' => 'Grown Ups 2', 'genre' => 'Comedy', 'rating' => 8.9, 'year' => 2014, 'is_available' => true]);
        Movie::create(['title' => 'Interstellar', 'genre' => 'Drama', 'rating' => 9.3, 'year' => 2014, 'is_available' => true]);
        Movie::create(['title' => 'Avengers: Endgame', 'genre' => 'Action', 'rating' => 9.0, 'year' => 2019, 'is_available' => true]);
    }
}
