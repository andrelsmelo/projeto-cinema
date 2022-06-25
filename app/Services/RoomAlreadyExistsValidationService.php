<?php

namespace App\Services;

use App\Models\Rooms;

class RoomAlreadyExistsValidationService
{
    /**
     * Valida se a sala já existe
     *
     * @param [type] $newRoom
     * @return void
     */
    public static function validateIfRoomAlreadyExists($newRoom)
    {
        $rooms = Rooms::get();
            
        foreach($rooms as $room) {
            if ($room->name == $newRoom['name']) {
                abort(400, 'Essa sala já existe');
            }
        }
        return true;
    }
    /**
     * Valida se a sala editada é a mesma que a original
     *
     * @param [type] $originalRoom
     * @param [type] $editedRoom
     * @return void
     */
    public static function validateIfEditedRoomIsSameAsOriginal($originalRoom, $editedRoom)
    {        
        if ($editedRoom['name'] != $originalRoom->name) {
            abort(400, 'Você não está editando a sala Original');
        }
        return true;
    }
}