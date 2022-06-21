<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use App\Models\MoviesShown;
use App\Models\Pegi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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

        $genres = Genre::get();
        $pegis = Pegi::get();
        $movies = Movies::get();
        return view('movies.show',[
            'movies' => $movies,
            'pegis' => $pegis,
            'genres' => $genres
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

        $request->validate([
            'name' => ['required', 'unique:movies', 'max: 255'],
            'duration' => ['required','max: 255'],
            'pegi_id' => ['required', 'exists:pegis,id'],
            'poster' => ['required','max: 255'],
            'trailer' => ['required','max: 255'],
            'release' => ['required', 'max: 4'],
            'genre_id' => ['required', 'exists:genres,id'],
            'sinopse' => ['required'],  
            'tags' => ['required','max: 255']
        ]);

        Movies::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'pegi_id' => $request->pegi_id,
            'poster' => $request->poster,
            'trailer' => $request->trailer,
            'release' => $request->release,
            'genre_id' => $request->genre_id,
            'sinopse' => $request->sinopse,
            'tags' => $request->tags
        ]);

        return redirect('/filmes');

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

        $movie = Movies::find($id);

        $movie->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'pegi_id' => $request->pegi_id,
            'poster' => $request->poster,
            'trailer' => $request->trailer,
            'release' => $request->release,
            'genre_id' => $request->genre_id,
            'sinopse' => $request->sinopse,
            'tags' => $request->tags
        ]);

        return redirect('/filmes');
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

        $moviesShown = MoviesShown::get();
        
        $sessions = $moviesShown->map(function ($moviesShown) {
            return collect($moviesShown->toArray())
                ->only(['session_date', 'rooms_id', 'sessions_id', 'movies_id'])
                ->all();
        });

        foreach ($sessions as $key => $value) {
            if ( $value['movies_id'] == $id) {
            abort(400);
            }
        }
        
        $movie = Movies::findOrFail($id);

        $movie->delete();

        return redirect('/filmes');
    }
}
