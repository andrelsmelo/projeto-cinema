<?php

namespace App\Services;

use App\Models\MoviesShown;

class MovieNotInSessionValidationService
{
    /**
     * Valida se o filme não está em uma sessão
     *
     * @param [type] $movie
     * @return void
     */
    public static function validateMovieNotInSession($movie)
    {
        //Resgata as sessões existentes
        $moviesShown = MoviesShown::get();
        
        //Vasculha as sessões existentes validando se o filme não se encontra em uma sessão
        foreach ($moviesShown as $movieShown) {
            if ( $movieShown['movie_id'] == $movie->id) {
            abort(400, 'Não é possivel deletar um filme que existe em uma sessão');
            }
        }
        return true;
    }
}