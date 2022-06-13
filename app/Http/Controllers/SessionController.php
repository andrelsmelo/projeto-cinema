<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use App\Models\MoviesShown;
use App\Models\Pegi;
use App\Models\Rooms;
use App\Models\Sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate ;

class SessionController extends Controller
{
    /**
     * Mostra todas as sessões
     *
     * @return void
     */
    public function show()
    {
        Gate::authorize('access-admin');

        $moviesShown = MoviesShown::get();
        $movies = Movies::get();
        $rooms = Rooms::get();
        $sessions = Sessions::get();

        return view('sessions.show',[
            'moviesShown' => $moviesShown,
            'movies' => $movies,
            'rooms' => $rooms,
            'sessions' => $sessions
        ]);
    }

    /**
     * Tela de criação de Sessão
     *
     * @return void
     */
    public function create()
    {
        Gate::authorize('access-admin');

        $movies = Movies::get();
        $sessions = Sessions::get();
        $rooms = Rooms::get();

        return view('sessions.create',[
            'movies' => $movies,
            'rooms' => $rooms,
            'sessions' => $sessions
        ]);   
    }
    /**
     * Salva a Sessão Nova no Banco de Dados
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Gate::authorize('access-admin');

        $data = $request->except('_token');
        $duration = Movies::find($data['movies_id'])->only('duration');
        $newdata = Arr::add($data, 'movie_duration', Arr::get($duration,'duration'));
        MoviesShown::create($newdata);

        return redirect('/sessoes'); 
    }
    /**
     * Tela de edição de Sessão
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        Gate::authorize('access-admin');

        $moviesShown = MoviesShown::find($id);
        $rooms = Rooms::get();
        $sessions = Sessions::get();
        $movies = Movies::get();

        return view('sessions.edit',[
            'moviesShown' => $moviesShown,
            'rooms' => $rooms,
            'sessions' => $sessions,
            'movies' => $movies
        ]);  
    }
    /**
     * Atualiza uma Sessão no Banco de Dados
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        Gate::authorize('access-admin');

        $data = $request->except('_token');
        $moviesShown = MoviesShown::find($id);
        $duration = Movies::find($data['movies_id'])->only('duration');
        $newdata = Arr::add($data, 'movie_duration', Arr::get($duration,'duration'));

        $moviesShown->update($newdata);

        return redirect('/sessoes');
    }
    /**
     * Deleta uma Sessão no Banco de Dados
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        Gate::authorize('access-admin');
        
        $moviesShown = MoviesShown::find($id);

        $moviesShown->delete();

        return redirect('/sessoes'); 
    }


}
