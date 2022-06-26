<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Services\NewRoomRequestValidationService;
use App\Services\RoomAlreadyExistsValidationService;
use App\Services\RoomNotInSessionValidationService;
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

        //Resgata as salas existentes
        $rooms = Rooms::get();

        return view('rooms.show',[
            'rooms' => $rooms
        ]);
    }
    /**
     * Tela de criação de nova Sala
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

        //Valida se a request cumpre os campos requiridos
        NewRoomRequestValidationService::validateNewRoomRequest($request);

        //Atribui a request de nova sala a uma variavel
        $newRoom = $request->except('_token');

        //Valida se a sala já não existe
        RoomAlreadyExistsValidationService::validateIfRoomAlreadyExists($newRoom);

        //Cria a nova sala
        Rooms::create($newRoom);

        return redirect('/rooms'); 
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

        //Resgata a Sala especifica
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

        //Valida se a request cumpre os campos requiridos
        NewRoomRequestValidationService::validateNewRoomRequest($request);
        
        //Atribui a sala editada a uma variavel
        $editedRoom = $request->except('_token');

        //Atribui a sala original a uma variavel
        $originalRoom = Rooms::findOrFail($id);
       
        //Valida se a Sala editada é a mesma que a original
        RoomAlreadyExistsValidationService::validateIfEditedRoomIsSameAsOriginal($originalRoom, $editedRoom);

        //Atualiza a sala original com os dados da Sala editada
        $originalRoom->update($editedRoom);

        return redirect('/rooms');
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
        
        //Resgata a sala especifica
        $room = Rooms::findOrFail($id);

        //Valida se a sala não existe em uma sessão
        RoomNotInSessionValidationService::validateRoomNotInSession($room);

        //Deleta a sala 
        $room->delete();

        return redirect('/rooms'); 
    }

}
