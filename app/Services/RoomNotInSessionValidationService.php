<?php

namespace App\Services;

use App\Models\MoviesShown;

class RoomNotInSessionValidationService
{
    public static function validateRoomNotInSession($room)
    {

        $moviesShown = MoviesShown::get();
        
        foreach ($moviesShown as $movieShown) {
            if ( $movieShown['room_id'] == $room->id) {
            abort(400, 'Não é possivel deletar uma sala que existe em uma sessão');
            }
        }
        return true;
    }
}