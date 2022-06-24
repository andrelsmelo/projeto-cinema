<?php

namespace App\Services;

use App\Models\MoviesShown;

class SessionValidationService
{
    public static function validateSession($newSession)
    {
        $moviesShown = MoviesShown::get();

        foreach($moviesShown as $movieShown){
            if (
                $newSession['session_date'] == $movieShown->session_date
                && $newSession['room_id'] == $movieShown->room_id
            ) {
                if ($newSession['session_id'] == $movieShown->session_id)
                {
                    abort(400, 'Já existe uma sessão nesse horario');
                } elseif (
                    $newSession['session_hour'] > $movieShown->session->session_hour
                    && $newSession['session_hour'] < $movieShown->end_of_session
                ) {
                    abort(400, 'Existe uma sessão passando nesse horario');
                } elseif (
                    $newSession['session_hour'] < $movieShown->session->session_hour
                    && $newSession['end_of_session'] > $movieShown->session->session_hour
                ) {
                    abort(400, 'O filme conflita com o da proxima sessão');
                }
            }
        }
        return true;
    }
}