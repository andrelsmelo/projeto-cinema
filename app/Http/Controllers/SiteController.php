<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
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
        //Resgata as sessões disponiveis
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
        //Resgata os generos para filtragem
        $genres = Genres::get();

        //Resgatas os filmes disponiveis
        $moviesShown = MoviesShown::get();
        $movies = Movies::get();

        return view('mainpage.movies',[
            'genres' => $genres,
            'moviesShown' => $moviesShown,
            'movies' => $movies
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
        //Resgata um filme especifico e seus detalhes
        $movie = Movies::find($id);

        return view('mainpage.details',[
            'movie' => $movie
        ]);
    }
}
