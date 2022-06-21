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
use Illuminate\Support\Facades\Gate;

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
        $sessions = Sessions::get();
        $rooms = Rooms::get();
        $moviesShown = MoviesShown::get();



        return view('sessions.create', [
            'movies' => $movies,
            'rooms' => $rooms,
            'sessions' => $sessions,
            'moviesShown' => $moviesShown
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

        $request->validate([
            "session_date" => ['required'],
            "rooms_id" => ['required', 'exists:rooms,id'],
            "sessions_id" => ['required', 'exists:sessions,id'],
            "movies_id" => ['required', 'exists:movies,id']
        ]);

        $data = $request->except('_token');

        $duration = Movies::find($data['movies_id'])->only('duration');

        $newSessionHour = Sessions::find($data['sessions_id'])->only('session_hour');
        $endOfSession = strtotime($newSessionHour['session_hour']) + strtotime($duration['duration']);
        $secSessionHour = strtotime($newSessionHour['session_hour']) - strtotime('TODAY');
        $secEndOfSession = strtotime($duration['duration']) - strtotime('TODAY');
        $endOfSessionHour = gmdate("H:i:s", $secEndOfSession + $secSessionHour);

        $data = Arr::add($data, 'movie_duration', Arr::get($duration, 'duration'));
        $data = Arr::add($data, 'end_of_session', $endOfSessionHour);

        $moviesShown = MoviesShown::get();

        $sessions = $moviesShown->map(function ($moviesShown) {
            return collect($moviesShown->toArray())
                ->only(['session_date', 'rooms_id', 'sessions_id', 'end_of_session'])
                ->all();
        });

        foreach ($sessions as $key => $value) {

            $sessionsHour = Sessions::find($value['sessions_id'])->only('session_hour');
            
            if ($value['session_date'] == $data['session_date']
            && $value['rooms_id'] == $data['rooms_id']
            && $value['sessions_id'] == $data['sessions_id']) {
                abort(400, 'Já existe uma sessão para esse horário');
            } elseif($value['end_of_session'] >= $newSessionHour['session_hour']
            && $newSessionHour['session_hour'] > $sessionsHour['session_hour'] ){
                abort(400, 'Existe um filme nesse horario');
            } elseif($value['end_of_session'] >= $newSessionHour['session_hour']
            && $sessionsHour['session_hour'] < $data['end_of_session'] ){
                abort(400, 'O Filme Conflita com o da proxima sessão');
            }
        }

        MoviesShown::create($data);

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


        return view('sessions.edit', [
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

        $request->validate([
            "session_date" => [],
            "rooms_id" => ['exists:rooms,id'],
            "sessions_id" => ['exists:sessions,id'],
            "movies_id" => ['exists:movies,id']
        ]);
        $moviesShown = MoviesShown::get();
        $sessionHour = Sessions::find($request['sessions_id'])->only('session_hour');

        $sessions = $moviesShown->map(function ($moviesShown) {
            return collect($moviesShown->toArray())
                ->only(['session_date', 'rooms_id', 'sessions_id', 'movies_id', 'end_of_session'])
                ->all();
        });

        foreach ($sessions as $key => $value) {
            if ($value['session_date'] == $request['session_date']) {
                if ($value['rooms_id'] == $request['rooms_id']) {
                    if ($value['end_of_session'] >= $sessionHour['session_hour']) {
                        abort(400, 'Não é possivel editar a sessão para esse horário');
                    }
                }
            }
        }

        $data = $request->except('_token');
        $moviesShown = MoviesShown::find($id);
        $duration = Movies::find($data['movies_id'])->only('duration');
        $newdata = Arr::add($data, 'movie_duration', Arr::get($duration, 'duration'));

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
