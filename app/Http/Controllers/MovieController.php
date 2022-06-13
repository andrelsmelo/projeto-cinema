<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
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

        Movies::create([
            'name' => $request->name,
            'duration' => $request->duration,
            'pegi_id' => $request->pegi_id,
            'poster' => $request->poster,
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

        $movie = Movies::find($id);

        $movie->update([
            'name' => $request->name,
            'duration' => $request->duration,
            'pegi_id' => $request->pegi_id,
            'poster' => $request->poster,
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
        
        $movie = Movies::find($id);

        $movie->delete();

        return redirect('/filmes');
    }
}
