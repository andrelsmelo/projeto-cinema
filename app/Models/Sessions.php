<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    use HasFactory;

    //Define relação de horarios com sessões
    public function moviesShown()
    {
        return $this->belongsTo(MoviesShown::class);
    }
}
