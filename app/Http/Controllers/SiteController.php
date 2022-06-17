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
    /**
     * Exibe a tela principal com os Filmes em exibição
     *
     * @return void
     */
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
    /**
     * Exibe tela de todos os filmes disponiveis no cinema com lsita lateral de gêneros
     *
     * @return void
     */
    public function showingMovies()
    {
        $movies = Movies::get();
        $genres = Genre::get();
        return view('mainpage.movies',[
            'movies' => $movies,
            'genres' => $genres
        ]);
    }
    /**
     * Exibe filmes de um gênero especifico
     *
     * @param [type] $genre_id
     * @return void
     */
    public function moviesPerGenre($genre_id)
    {
        $genre = Genre::find($genre_id);
        $moviesPerGenre = Movies::select('*')->where('genre_id', $genre_id)->get();
        return view('mainpage.movies-per-genre',[
            'genre' => $genre,
            'moviesPerGenre' => $moviesPerGenre
        ]);
    }
    /**
     * Mostra os detalhes dos filmes e suas sessões(Anteriores e Próximas)
     *
     * @param [type] $id
     * @return void
     */
    public function movieDetails($id)
    {
        $moviesShown = MoviesShown::where('movies_id', $id)->get();
        $sessions = Sessions::get();
        $rooms = Rooms::get();
        $movie = Movies::findOrFail($id);
        $genre = Genre::findOrFail($movie->genre_id);
        $pegi = Pegi::findOrFail($movie->pegi_id);
        return view('mainpage.details',[
            'movie' => $movie,
            'genre' => $genre,
            'pegi' => $pegi,
            'moviesShown' => $moviesShown,
            'sessions' => $sessions,
            'rooms' => $rooms
        ]);
    }
}
