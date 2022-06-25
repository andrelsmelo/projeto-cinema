<?php

namespace App\Services;

use App\Models\Movies;
use App\Models\Sessions;
use Illuminate\Http\Request;

class NewSessionFormatterService
{
    public static function formatRequest(Request $request)
    {
        $movieDetails = Movies::find($request['movies_id']);
        $sessionDetails = Sessions::find($request['sessions_id']);

        //Retorna o horario final da Sessão
        
        $secSessionHour = strtotime($sessionDetails['session_hour']) - strtotime('TODAY');
        $secEndOfSession = strtotime($movieDetails['duration']) - strtotime('TODAY');

        $endOfSessionHour = gmdate("H:i:s", $secEndOfSession + $secSessionHour);

        $newSession = [
            "session_date" => $request['session_date'],
            "room_id" => $request['rooms_id'],
            "session_id" => $request['sessions_id'],
            "movie_id" => $request['movies_id'],
            "session_hour" => $sessionDetails['session_hour'],
            "duration" => $movieDetails['duration'],
            "end_of_session" => $endOfSessionHour
        ];
        return $newSession;
    }
}