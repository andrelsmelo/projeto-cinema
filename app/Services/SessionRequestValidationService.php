<?php

namespace App\Services;

use Illuminate\Http\Request;

class SessionRequestValidationService
{
    /**
     * Valida se os campos requeridos estão preenchidos e sala, filme e horario existem
     *
     * @param Request $request
     * @return void
     */
    public static function validateSessionRequest(Request $request)
    {
        $request->validate([
            "session_date" => ['required'],
            "rooms_id" => ['required', 'exists:rooms,id'],
            "sessions_id" => ['required', 'exists:sessions,id'],
            "movies_id" => ['required', 'exists:movies,id']
        ]);
    }
}