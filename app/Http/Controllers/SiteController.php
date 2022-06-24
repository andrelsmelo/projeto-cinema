<?php

namespace App\Http\Controllers;

use App\Models\Pegi;
use App\Models\Genre;
use App\Models\Rooms;
use App\Models\Movies;
use App\Models\Sessions;
use App\Models\MoviesShown;
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
        
        return view('mainpage.home',[
            'moviesShown' => $moviesShown
        ]);
    }
    /**
     * Exibe tela de todos os filmes disponiveis no cinema com lsita lateral de gêneros
     *
     * @return void
     */
    public function showingMovies()
    {
        $genres = Genre::get();
        $moviesShown = MoviesShown::get();

        return view('mainpage.movies',[
            'genres' => $genres,
            'moviesShown' => $moviesShown
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
        $movie = Movies::find($id);

        return view('mainpage.details',[
            'movie' => $movie
        ]);
    }
}
