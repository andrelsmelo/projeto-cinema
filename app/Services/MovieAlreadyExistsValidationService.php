<?php

namespace App\Services;

use App\Models\Movies;

class MovieAlreadyExistsValidationService
{
    /**
     * Valida se o filme já existe
     *
     * @param [type] $newMovie
     * @return void
     */
    public static function validateIfMovieAlreadyExists($newMovie)
    {
        $movies = Movies::get();
            
        foreach($movies as $movie) {
            if ($movie->name == $newMovie['name']) {
                abort(400, 'Esse filme já existe');
            }
        }
        return true;
    }
    /**
     * Valida se o filme que está sendo editado é igual ao filme original
     *
     * @param [type] $originalMovie
     * @param [type] $editedMovie
     * @return void
     */
    public static function validateIfEditedMovieIsSameAsOriginal($originalMovie, $editedMovie)
    {        
        if ($editedMovie['name'] != $originalMovie->name) {
            abort(400, 'Você não está editando o filme Original');
        }
        return true;
    }
}