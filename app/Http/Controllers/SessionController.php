<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Movies;
use App\Models\Sessions;
use App\Models\MoviesShown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Services\SessionFormatterService;
use App\Services\SessionValidationService;
use App\Services\SessionRequestValidationService;

class SessionController extends Controller
{
    /**
     * Tela de visualização e criação de Sessões
     *
     * @return void
     */
    public function create()
    {
        Gate::authorize('access-admin');

        //Resgata os filmes, salas e horarios de sessões disponiveis
        $movies = Movies::get();
        $rooms = Rooms::get();
        $sessions = Sessions::get();

        //Resgata sessões existentes
        $moviesShown = MoviesShown::get();

        return view('sessions.create', [
            'movies' => $movies,
            'rooms' => $rooms,
            'sessions' => $sessions,
            'moviesShown' => $moviesShown
        ]);
    }
    /**
     * Salva a Nova Sessão
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Gate::authorize('access-admin');

        //Valida os dados enviados na requisição
        SessionRequestValidationService::validateSessionRequest($request);

        //Formata a request com os detalhes da sessão e a atribui a uma variavel
        $newMovieShown = SessionFormatterService::formatRequest($request);

        //Valida se a sessão pode ser criada
        SessionValidationService::validateSession($newMovieShown);

        //Cria uma nova sessão
        MoviesShown::create($newMovieShown);

        return redirect('/sessions');
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

        //Resgata dados da sessão especifica
        $movieShown = MoviesShown::find($id);

        //Resgata salas, horarios de sessões e filmes disponiveis
        $rooms = Rooms::get();
        $sessions = Sessions::get();
        $movies = Movies::get();

        return view('sessions.edit', [
            'movieShown' => $movieShown,
            'rooms' => $rooms,
            'sessions' => $sessions,
            'movies' => $movies
        ]);
    }
    /**
     * Atualiza uma Sessão
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        Gate::authorize('access-admin');

        //Valida se a request cumpre os campos requiridos
        SessionRequestValidationService::validateSessionRequest($request);

        //Formata a request com os detalhes da sessão
        $editedMovieShown = SessionFormatterService::formatRequest($request);
        
        //Valida se a sessão pode ser criada
        SessionValidationService::validateSession($editedMovieShown); 
        
        //Atribui a sessão original a uma variavel
        $originalMovieShown = MoviesShown::find($id);

        //Atualiza a Sessão
        $originalMovieShown->update($editedMovieShown);

        return redirect('/sessions');
    }
    /**
     * Deleta uma Sessão
     * 
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        Gate::authorize('access-admin');

        //Retorna a sessão especifica
        $movieShown = MoviesShown::find($id);

        //Deleta a sessão
        $movieShown->delete();

        return redirect('/sessions');
    }
}
