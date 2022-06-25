<?php

namespace App\Services;

use Illuminate\Http\Request;

class MovieRequestValidationService
{
    /**
     * Valida se os campos requeridos estão preenchidos
     *
     * @param Request $request
     * @return void
     */
    public static function validateMovieRequest(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max: 255'],
            'duration' => ['required','max: 255'],
            'pegi_id' => ['required', 'exists:pegis,id'],
            'poster' => ['required','max: 255'],
            'trailer' => ['required','max: 255'],
            'release' => ['required', 'max: 4'],
            'genre_id' => ['required', 'exists:genres,id'],
            'sinopse' => ['required'],  
            'tags' => ['required','max: 255']
        ]);
    }
}