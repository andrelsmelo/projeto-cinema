<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Pegis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Services\MovieRequestValidationService;
use App\Services\MovieNotInSessionValidationService;
use App\Services\MovieAlreadyExistsValidationService;

class MovieController extends Controller
{
    /**
     * Mostra todos os filmes cadastrados
     *
     * @return void
     */
    public function show()
    {
        Gate::authorize('access-admin');

        //Resgata todos os filmes
        $movies = Movies::get();

        return view('movies.show',[
            'movies' => $movies,
        ]);
    }
    /**
     * Tela de criação de novo Filme
     *
     * @return void
     */
    public function create()
    {
        Gate::authorize('access-admin');
        
        //Resgata os Generos e classificações existentes
        $genres = Genres::get();
        $pegis = Pegis::get();

        return view('movies.create',[
            'pegis' => $pegis,
            'genres' => $genres
        ]);
    }
    /**
     * Salva o novo Filme
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Gate::authorize('access-admin');

        //Valida se a request cumpre os campos requiridos
        MovieRequestValidationService::validateMovieRequest($request);

        //Atribui a request a uma variavel de novo filme
        $newMovie = $request->except('_token');

        //Valida se o filme já não existe
        MovieAlreadyExistsValidationService::validateIfMovieAlreadyExists($newMovie);

        //Cria o filme
        Movies::create($newMovie);

        return redirect('/movies');
    }
    /**
     * Tela de Edição de um Filme especifico
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        Gate::authorize('access-admin');

        //Resgata o filme especifico, generos e classificações existentes
        $movie = Movies::find($id);
        $genre = Genres::get();
        $pegi = Pegis::get();

        return view('movies.edit',[
            'movie' => $movie,
            'pegi' => $pegi,
            'genre' => $genre
        ]);
    }
    /**
     * Atualiza um filme especifico
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        Gate::authorize('access-admin');
        
        //Valida se a request cumpre os campos requiridos
        MovieRequestValidationService::validateMovieRequest($request);

        //Atribui a request do filme editado a uma variavel
        $editedMovie = $request->except('_token');

        //Resgata o filme original
        $originalMovie = Movies::findOrFail($id);

        //Valida se o filme editado é o mesmo do filme original
        MovieAlreadyExistsValidationService::validateIfEditedMovieIsSameAsOriginal($originalMovie, $editedMovie);
        
        //Atualiza o filme original com os dados do filme editado
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
        
        //Resgata o filme especifico
        $movie = Movies::findOrFail($id);

        //Valida se o filme não existe em uma sessão
        MovieNotInSessionValidationService::validateMovieNotInSession($movie);

        //Deleta o filme
        $movie->delete();

        return redirect('/movies');
    }
}
