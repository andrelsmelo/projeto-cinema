<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use App\Models\MoviesShown;
use App\Models\Pegi;
use App\Models\Rooms;
use App\Models\Sessions;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $moviesShown = MoviesShown::get();
        $movies = Movies::get();
        $pegis = Pegi::get();
        $genres = Genre::get();
        $rooms = Rooms::get();
        $sessions = Sessions::get();
        
        return view('mainpage.home',[
            'moviesShown' => $moviesShown,
            'movies' => $movies,
            'pegis' => $pegis,
            'genres' => $genres,
            'rooms' => $rooms,
            'sessions' => $sessions
        ]);
    }

    public function showingMovies()
    {
        $movies = Movies::get();
        $genres = Genre::get();
        return view('mainpage.movies',[
            'movies' => $movies,
            'genres' => $genres
        ]);
    }

    public function movieDetails($id)
    {
        $moviesShown = MoviesShown::where('movies_id', $id)->get();
        $sessions = Sessions::get();
        $rooms = Rooms::get();
        $movie = Movies::find($id);
        $genre = Genre::find($movie->genre_id);
        $pegi = Pegi::find($movie->pegi_id);
        return view('mainpage.details',[
            'movie' => $movie,
            'genre' => $genre,
            'pegi' => $pegi,
            'moviesShown' => $moviesShown,
            'sessions' => $sessions,
            'rooms' => $rooms
        ]);
    }

    public function moviesPerGenre($genre_id)
    {
        $genre = Genre::find($genre_id);
        $moviesPerGenre = Movies::select('*')->where('genre_id', $genre_id)->get();
        return view('mainpage.movies-per-genre',[
            'genre' => $genre,
            'moviesPerGenre' => $moviesPerGenre
        ]);
    }
}
