<?php

namespace App\Services;

use App\Models\MoviesShown;

class MovieNotInSessionValidationService
{
    public static function validateMovieNotInSession($movie)
    {

        $moviesShown = MoviesShown::get();
        
        foreach ($moviesShown as $movieShown) {
            if ( $movieShown['movie_id'] == $movie->id) {
            abort(400, 'Não é possivel deletar um filme que existe em uma sessão');
            }
        }
        return true;
    }
}