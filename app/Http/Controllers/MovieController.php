<?php

namespace App\Http\Controllers;

use App\Models\Pegi;
use App\Models\Genre;
use App\Models\Movies;
use App\Services\MovieNotInSessionValidationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Services\MovieRequestValidationService;
use App\Services\NewMovieRequestValidationService;
use App\Services\NewMovieValidationService;

class MovieController extends Controller
{
    /**
     * Tela que mostra todos os filmes
     *
     * @return void
     */
    public function show()
    {
        Gate::authorize('access-admin');

        $movies = Movies::get();

        return view('movies.show',[
            'movies' => $movies,
        ]);
    }
    /**
     * Tela de Criação de Filme Novo
     *
     * @return void
     */
    public function create()
    {
        Gate::authorize('access-admin');

        $genres = Genre::get();
        $pegis = Pegi::get();

        return view('movies.create',[
            'pegis' => $pegis,
            'genres' => $genres
        ]);
    }
    /**
     * Salva o Filme novo no Banco de Dados
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Gate::authorize('access-admin');

        NewMovieRequestValidationService::validateRequest($request);

        $newMovie = $request->except('_token');

        NewMovieValidationService::validateMovie($newMovie);

        Movies::create($newMovie);

        return redirect('/movies');

    }
    /**
     * Tela de Edição de Filme
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        Gate::authorize('access-admin');
        
        $genre = Genre::get();
        $pegi = Pegi::get();
        $movie = Movies::find($id);

        return view('movies.edit',[
            'movie' => $movie,
            'pegi' => $pegi,
            'genre' => $genre
        ]);
    }
    /**
     * Atualiza Filme no Banco de Dados
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        Gate::authorize('access-admin');
        
        NewMovieRequestValidationService::validateRequest($request);

        $editedMovie = $request->except('_token');

        $originalMovie = Movies::findOrFail($id);

        $originalMovie->update($editedMovie);

        return redirect('/movies');
    }
    /**
     * Deleta um filme do Banco De Dados
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        Gate::authorize('access-admin');
        
        $movie = Movies::findOrFail($id);

        MovieNotInSessionValidationService::validateMovieNotInSession($movie);

        $movie->delete();

        return redirect('/movies');
    }
}
