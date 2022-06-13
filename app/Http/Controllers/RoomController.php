<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RoomController extends Controller
{
    /**
     * Mostra todos as salas
     *
     * @return void
     */
    public function show()
    {
        Gate::authorize('access-admin');

        $rooms = Rooms::get();

        return view('rooms.show',[
            'rooms' => $rooms
        ]);
    }
    /**
     * Tela de criação de Sala
     *
     * @return void
     */
    public function create()
    {
        Gate::authorize('access-admin');
        
        return view('rooms.create');   
    }
    /**
     * Salva a Sala Nova no Banco de Dados
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        Gate::authorize('access-admin');

        Rooms::create($request->except('_token'));

        return redirect('/salas'); 
    }
    /**
     * Tela de edição de Sala
     *
     * @param integer $id
     * @return void
     */
    public function edit(int $id)
    {
        Gate::authorize('access-admin');

        $room = Rooms::find($id);

        return view('rooms.edit',[
            'room' => $room
        ]);  
    }
    /**
     * Atualiza uma sala no Banco de Dados
     *
     * @param integer $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {
        Gate::authorize('access-admin');

        $room = Rooms::find($id);

        $room->update($request->except('_token'));

        return redirect('/salas');
    }
    /**
     * Deleta uma Sala no Banco de Dados
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        Gate::authorize('access-admin');
        
        $room = Rooms::find($id);

        $room->delete();

        return redirect('/salas'); 
    }

}
