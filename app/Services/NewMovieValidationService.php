<?php

namespace App\Services;

use App\Models\Movies;

class NewMovieValidationService
{
    public static function validateMovie($newMovie)
    {
        $movies = Movies::get();
            
        foreach($movies as $movie) {
            if ($movie->name == $newMovie['name']) {
                abort(400, 'Esse filme já existe');
            }
        }
        return true;
    }
}