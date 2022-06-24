<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Movies;
use App\Models\Sessions;
use App\Models\MoviesShown;
use Illuminate\Http\Request;
use App\Services\FormatterService;
use Illuminate\Support\Facades\Gate;
use App\Services\SessionRequestValidationService;
use App\Services\SessionValidationService;

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

        $movies = Movies::get();
        $rooms = Rooms::get();
        $sessions = Sessions::get();
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

        SessionRequestValidationService::validateRequest($request);

        //Formata a request com os detalhes da sessão

        $newSession = FormatterService::formatRequest($request);

        //Valida se a sessão pode ser criada

        SessionValidationService::validateSession($newSession);

        //Cria uma nova sessão

        MoviesShown::create($newSession);

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

        $movieShown = MoviesShown::find($id);
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
     * Atualiza uma Sessão no Banco de Dados
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        Gate::authorize('access-admin');

        //Valida os dados enviados na requisição

        SessionRequestValidationService::validateRequest($request);

        //Formata a request com os detalhes da sessão
        
        $editedSession = FormatterService::formatRequest($request);
        
        //Valida se a sessão pode ser criada
        
        SessionValidationService::validateSession($editedSession);        

        $movieShown = MoviesShown::find($id);

        $movieShown->update($editedSession);

        return redirect('/sessions');
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

        $movieShown = MoviesShown::find($id);

        $movieShown->delete();

        return redirect('/sessions');
    }
}
