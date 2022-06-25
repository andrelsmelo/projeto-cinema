<?php

namespace App\Services;

use Illuminate\Http\Request;

class NewRoomRequestValidationService
{
    /**
     * Valida se os campos requeridos estão preenchidos
     *
     * @param Request $request
     * @return void
     */
    public static function validateNewRoomRequest(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max: 255'],
            'capacity' => ['required']
        ]);
    }
}