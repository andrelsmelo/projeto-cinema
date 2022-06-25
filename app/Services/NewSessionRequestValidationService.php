<?php

namespace App\Services;

use Illuminate\Http\Request;

class NewSessionRequestValidationService
{
    public static function validateRequest(Request $request)
    {
        $request->validate([
            "session_date" => ['required'],
            "rooms_id" => ['required', 'exists:rooms,id'],
            "sessions_id" => ['required', 'exists:sessions,id'],
            "movies_id" => ['required', 'exists:movies,id']
        ]);
    }
}