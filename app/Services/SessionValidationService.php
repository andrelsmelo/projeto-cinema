<?php

namespace App\Services;

use App\Models\MoviesShown;

class SessionValidationService
{
    /**
     * Valida se a sessão não conflita com nenhuma outra sessão existente
     *
     * @param [type] $newMovieShown
     * @return void
     */
    public static function validateSession($newMovieShown)
    {
        $moviesShown = MoviesShown::get();

        foreach($moviesShown as $movieShown){
            //Valida se horario e data de sessões são iguais as já existentes
            if (
                $newMovieShown['session_date'] == $movieShown->session_date
                && $newMovieShown['room_id'] == $movieShown->room_id
            ) {
                //Valida se horario da sessão é o mesmo de alguma existente
                if ($newMovieShown['session_id'] == $movieShown->session_id)
                {
                    abort(400, 'Já existe uma sessão nesse horario');
                } 
                    //Valida se horario da sessão nova é maior que o horario inicial e menor que horario final das sessões existentes    
                    elseif (
                    $newMovieShown['session_hour'] > $movieShown->session->session_hour
                    && $newMovieShown['session_hour'] < $movieShown->end_of_session
                ) {
                    abort(400, 'Existe uma sessão passando nesse horario');
                }
                    //Valida se horario da sessão nova é menor que o horario inicial e o horario final da nova sessão é maior que horario inicial das sessões existentes 
                    elseif (
                    $newMovieShown['session_hour'] < $movieShown->session->session_hour
                    && $newMovieShown['end_of_session'] > $movieShown->session->session_hour
                ) {
                    abort(400, 'O filme conflita com o da proxima sessão');
                }
            }
        }
        return true;
    }
}